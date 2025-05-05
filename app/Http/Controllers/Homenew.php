<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homenew extends Controller
{
    function show(){
        return "student list";
    }

    function add(){
        return "student added";
    }
    function about($name)
    {
        return $name;
    }
}
