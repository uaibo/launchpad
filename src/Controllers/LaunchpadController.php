<?php
namespace Uaibo\Launchpad\Controllers;

use Illuminate\Http\Request;
use Uaibo\Launchpad\Models\Launchpad;
use Stevebauman\Location\Facades\Location;
use Uaibo\Launchpad\OpenAI;

class LaunchpadController
{
    public function launchPage(Request $request)
    {
        $brand_color            =   config("launchpad.branding_colors.primary");
        $headline               =   launchpad_get_styled_text('main_headline');
        $short_description      =   launchpad_get_styled_text('short_description');
        $benefits               =   config('launchpad.benefits');
        $prelaunch_text         =   config('launchpad.prelaunch_text');
        $leave_your_email_text  =   config('launchpad.leave_your_email_text');
        $email_field_placeholder=   config('launchpad.email_field_placeholder');
        $submit_button_text     =   config('launchpad.submit_button_text');
        $made_for_text          =   config('launchpad.made_for_text');
        $made_by_link           =   config('launchpad.made_by_link');
        $made_by_text           =   config('launchpad.made_by_text');
        $thank_you_text         =   config('launchpad.thank_you_text');


        $openai = new OpenAI();
        $keyword = 'wordpress optimisation';
    
        $headline = $openai->getMessage("A value-proposition punch-line for a ${keyword} tool as a saas product, in less than 50 characters. Avoid hashtags. Wrap the most important word in a span tag and style text color with ${brand_color}");
        
        $short_description = $openai->getMessage("Write a short description that explains what the user can expect from an early version of this software. It should be in 160 characters of less.");
        
        $benefits = [
            $openai->getMessage("Write a main benefit this solution would have for its target audience. It must be iin less than 5 words.  Add a relevant emoji in front of it."),
            $openai->getMessage("Write another benefit this solution would have for its target audience. It must be iin less than 5 words.  Add a relevant emoji in front of it."),
            $openai->getMessage("Write another benefit this solution would have for its target audience. It must be iin less than 5 words.  Add a relevant emoji in front of it."),
            $openai->getMessage("Write another benefit this solution would have for its target audience. It must be iin less than 5 words.  Add a relevant emoji in front of it."),
        ];

        $headline = str_replace('"', '', $headline);
        $short_description = str_replace('"', '', $short_description);

        return view('launchpad::index',
            compact(
                'brand_color',
                'headline',
                'short_description',
                'benefits',
                'prelaunch_text',
                'leave_your_email_text',
                'email_field_placeholder',
                'submit_button_text',
                'made_for_text',
                'made_by_link',
                'made_by_text',
                'thank_you_text'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'name' => 'string|min:2'
        ]);

        Launchpad::updateOrCreate(
            [
                'email'     => $request->email
            ],
            [
                'phone'     => $request->phone,
                'name'      => $request->name,
                'source'    => $request->source,
                'ip'        => $request->ip,
                'country'   => $this->getCountry($request->ip)
            ]
        );

        return [
            'message' => 'Success',
            'result' => true
        ];
    }

    function getCountry($ip)
    {
        try{
            $locationInfo = Location::get($ip);

            return $locationInfo?->countryName;

        } catch(\Exception $e){
            //$e->getMessage();
        }

        return null;
    }
}
