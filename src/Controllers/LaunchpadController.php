<?php
namespace Uaibo\Launchpad\Controllers;

use Illuminate\Http\Request;
use Uaibo\Launchpad\Models\Launchpad;
use Stevebauman\Location\Facades\Location;

class LaunchpadController
{
    public function launchPage(Request $request)
    {
        return view('launchpad::index');
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
