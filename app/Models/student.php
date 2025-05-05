<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // we will import the model to the controller that is StudentController

    //lets make a function and pass it to view
    function testFun()
    {
        return "dummy function";
    }
}
