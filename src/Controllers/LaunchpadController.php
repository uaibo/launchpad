<?php
namespace Uaibo\Launchpad\Controllers;

use Illuminate\Http\Request;
use App\Models\Launchpad;

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
                'email' => $request->email
            ],
            [
                'phone' => $request->phone,
                'name' => $request->name
            ]
        );

        return [
            'message' => 'Success',
            'result' => true
        ];
    }
    
}
