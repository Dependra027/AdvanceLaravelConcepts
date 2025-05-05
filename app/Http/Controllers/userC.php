<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 //lets import the model
use App\Models\user;
class userC extends Controller
{
    //understanding modal query builder
    function queries()
    {

        $response=user::all();
        // or can write
        // $response=user::get(); works same, it meeans select * from user

        //lets insert
        /*
        $response=user::insert([
            'name'=>'jay',
            'email'=>'jay@.com',
            'password'=>'jay',
        ]);
        if($response){
            return "Data inserted";
        }
        else{
            return "data not inserted";
        }

        */

        //lets update
        $response=user::where('name','jay')->update(['email'=>'durgesh@']);
        if($response){
            return "Data updated";
        }
        else{
            return "data not updated";
        }

        return view('users',['users'=>$response]);
    }
}
