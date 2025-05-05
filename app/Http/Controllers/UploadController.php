<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function uploadFile(Request $request)
    {
        // return "uploaded successfully";

        // let upload file and get its path name and file name
        $path=$request->file('file')->store('public');
        return $path;
        //this means that we are storing file in public

        //to aceess the image in ui, first make image public by using cmd php artisan storage:link
    }
}
