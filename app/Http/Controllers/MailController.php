<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import mail class
use Illuminate\Support\Facades\Mail;
//import mail file as well
use App\Mail\welcomeEmail;

class MailController extends Controller
{
    //
    function sendEmail(Request $request)
    {
        // $to="dependrasingh027@gmail.com";
        // $msg="Hello!";
        // $subject="Mail aya kya?";

        // lets get to,subject,msg from form
        $to=$request->to;
        $msg=$request->message;
        $subject=$request->subject;

        //sending mail
        Mail::to($to)->send(new welcomeEmail($msg,$subject));
        return "Email Send";
    }

}
