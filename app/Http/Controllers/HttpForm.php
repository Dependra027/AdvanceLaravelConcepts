<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpForm extends Controller
{
    //
    function login(Request $request)
    {
        // http methods:-

        //to get which method used in http request
        echo"Request method is ".$request->method();
        echo "<br>";
        // to get path
        echo "Request path is ".$request->path();
        echo "<br>";
        // to get request url
        echo "Request url is ". $request->url();
        echo "<br>";

        echo "name is ".$request->name;
        echo "<br>";

        //to print full request
        print_r($request->input());
        echo "<br>";

        //to get ip
        echo "ip is ".$request->ip();

    }

}
