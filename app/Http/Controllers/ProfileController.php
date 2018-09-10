<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller names should always be PascalCase and end in Controller
class ProfileController extends Controller
{
    // Show a list of all resources (in this case profiles)
    public function index()
    {
        $names = ['Fedde van Gils', 'Tim Lutt' , 'Ayub Cige', 'Pieter-Jan Kolijn'];
        return view('index')->with('profiles', $names);
    }

    // Show a single resource (in this case a profile)
    public function show()
    {
        $profile = (object)[
            'name'          => 'Tim',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus',
            'email'         => 't.lutt@rocwb.nl',
            'interests'     => [
                'eten',
                'slapen'
            ]
        ];

        return view('profile')
            ->with('profile', $profile);
    }
}
