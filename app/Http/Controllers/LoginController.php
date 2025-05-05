<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function login(Request $request)
    {
        // we want to store things into sessions, let store user name
        $request->session()->put('user',$request->input('user'));

        // it will store user names into user session

        //lets make flash session
        $request->session()->flash('message','user has been added successfully');


        // lets redirect this into profile page, when clicked to login ,ot will redirect to profile page
        return redirect('profile');
    }
//we can make multiple sessions

    // function for sessions logout
    function logout()
    {
        session()->pull('user');
        return redirect('profile');
    }
}
