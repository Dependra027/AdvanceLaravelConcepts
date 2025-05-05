<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model
use App\Models\student;

class MysqlForm extends Controller
{
    //
    function add(Request $request)
    {
        //lets add data to mysql
        $student=new student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        //save data
        $student->save();

        if($student)
        {
            //if data inserted then redirect to the table
            return redirect('add');
        }
        else{
            echo "not able to add";
        }

    }

    // function to display list in ui
    function showList()
    {
        // $studentData=student::all();

        //apply pagination
        $studentData=student::paginate(5);
        // now it will only show 5 data whether it has thousands of data
        // now we will apply links to navigate through other data , apply it in the list-student

        //to show in list-student view
        return view('list-student',['student'=>$studentData]);
    }

    // delete function
    function deleteList($id)
    {
        $isDeleted=student::destroy($id);
        //condition if deleted then show table again without that deleted entry
        if($isDeleted)
        {
            return redirect('add');
        }
    }


    // edit function with id
    function editList($id)
    {
        // return $id;
        $student=student::find($id);
        //we need to make a edit form where details already get filled, we just need to update it and it get updatedd in the login-student tablle

        return view('edit-student',['data'=>$student]);
    }

    // update function with id to update populate edit data into mysql
    function updateData(Request $request, $id)
    {
        // we will first find id then update it
        $student=student::find($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;

        if($student->save())
        {

            return redirect('add');
        }
        else{
            echo "not able to update";
        }

    }

    // creating function for implementing searching of data from mysql and displaying it using view
    function searching(Request $request)
    {
        // searching according to name
        $studentData=student::where('name','like',"%$request->search%")->get();

        // return $studentData;
        //we want to search name and only dispaly that table data
        return view('list-student',["student"=>$studentData,'search'=>$request->search]);
        // here 'search'=>$request->search is for that when we write something in search box then on searching the word should not get invisible , the entry should be there until we dont remove


    }
}
