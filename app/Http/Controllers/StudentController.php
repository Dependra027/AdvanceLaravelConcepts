<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudent(){
        // passing testfun here
        $fun=new \App\Models\student;
        echo $fun->testfun();

        
        //importing the model
        $students=\App\Models\student::all(); //this will give all data from the student table from db

        //return $students; // to show all data

        // to show data in view
        return view('students',['data'=>$students]);

        // passing testfun here
        $fun=new \App\Models\student;
        echo $fun->testfun();
    }
}
