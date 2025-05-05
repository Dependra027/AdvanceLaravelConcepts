<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// we use model for getting data from database, but we can also use a header file

use Illuminate\Support\Facades\db;
class UserData extends Controller
{
    function users(){
        //then write
        // return DB::select('select * from users');

        //we will now show data from mysql in table form
        $users=DB::select('select * from users');
        return view('users',['users'=>$users]);
    }

    // lets use query builder db
    function queries()
    {
        $result=DB::table('users')->get();

        // lets try to filter the data
        // filter data according to email
        // $result=DB::table('users')->where('email','de@gmail.com')->get();


        // to insert data into table

       /*
        $result=DB::table('users')->insert([
            'name'=>'Tony',
            'email'=>'tony@gmail.com',
            'password'=>'rd',
        ]);
        if($result){
            return "Data inserted";
        }
        else{
            return "data not inserted";
        }


        */

        //updating data

        /*
        $result=DB::table('users')->where('name','tony')->update(['email'=>'tony@.com']);
        if($result){
            return "Data updated";
            }
        else{
            return "data not updated";
            }
        */

        return view('users',['users'=>$result]);
    }
}
