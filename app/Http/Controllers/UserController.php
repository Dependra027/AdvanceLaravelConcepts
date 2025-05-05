<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //this function will act when form get submitted
    // to get the data submitted in the form we use Request
    function addUser(Request $request)
    {
        // echo "add user function called";

        //  return $request->all(); //<-this will give all data of the form

         //to print individual
        echo "Username is: $request->username";
        echo "<br>";
        echo "Email is: $request->email";
        echo "<br>";
        echo "City is: $request->city";
        echo "br";
        print_r($request->skill);

        // form validation
        $request->validate([
            //we need that if we donot fill any input in form, it should  validate it to fill
            'username'=>'required|min:3|max:10',
            'email'=>'required|email',
            'city'=>'required|uppercase',  //this upperccase is a custom rule that we have created

            // to make custom messages
        ],[
            'username.required'=>'Username cannot be empty',
            'username.min'=>'username character should be 3',
            'email.email'=>'not a valid email',

            //custom message using custom rule
            'city.uppercase'=>'should be in uppercase',
        ]);
    }
}


// validation rule:- any validation that is applied is called validation rule like required, min,max,email

/* how to make custom rules-
write php artisan make:rule anyRuleName
ex- php artisan make:rule Uppercase, after this there will be a Rule folder createed inside app and a file will be created as UpperCase.php
*/
