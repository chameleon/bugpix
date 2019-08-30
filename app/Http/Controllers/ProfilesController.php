<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        // dd($user);   /*  die and dump will echo whatever user this is and stop operations */
        //dd(\App\User::find($user));
        //dd(User::find($user));

        // Set that to a variable an pass it into the view, (via the second argument which is an array)
        $user = User::findOrFail($user);
        
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
