<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function show(){
        // return view('about');

        // lets use named route to redirect
        // return redirect()->to('about/dependra');
        //instead of writting this we will use named route
        return to_route('n');
    }
}
