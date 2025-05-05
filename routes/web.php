<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // this is how o use controller
use App\Http\Controllers\AboutController;
use Illuminate\Foundation\Console\AboutCommand;
use App\Http\Controllers\Homenew;
use App\Http\Controllers\UserData;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\user;
use App\Http\Controllers\userC;
use App\Http\Controllers\HttpForm;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\RouteRegistrar;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MysqlForm;

use App\Http\Controllers\MailController;




Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});

Route::view('user-form','user-form');

//as we have used post method in the form so we eed to use post method in route also

Route::post('adduser',[UserController::class,'adduser']);

/*named route- imagine a Route named as
Route::view('/about/user','about');
you need to write /about/user in url to open this about view,
instead if we use named route that is
Route::view('/about/user','about')->name('mm");
now we only need to write this in url /mm and we can use this named anywhere to see obout view */

Route::view('about/dependra','about')->name('n');

Route::get('show',[AboutController::class,'show']);

// lets see how how grouping route prefix works
/*
Route::view('student/homenew','Homenew');
Route::get('student/show',[Homenew::class, 'show']);
Route::get('student/add',[Homenew::class, 'add']);
//dynamic routing
Route::get('student/{name}',[Homenew::class,'about']);
*/

// here we need to add student, what if it is many time , so we use grouping
Route::prefix('student')->group(function(){
    Route::view('/homenew','Homenew');
    Route::get('/show',[Homenew::class, 'show']);
    Route::get('/add',[Homenew::class, 'add']);
    Route::get('/{name}',[Homenew::class,'about']);
});
// it can work for multiple prefix like student/india

// same for controller Grouping
/*
Route::controller(Homenew::class)->group(function(){
    Route::get('/show','show');
    Route::get('/add','add');
    Route::get('/{name}','about');
});
*/




// routing for mysql topic
Route::get('users',[UserData::class,'users']);

// using eloquent model
Route::get('/userd',[StudentController::class,'getStudent']);

// using route for query builder
Route::get('userQuery',[UserData::class,'queries']);

//using route for model query builder
Route::get('modelQuery',[userC::class,'queries']);


//making rotes for http request class
Route::post('for',[HttpForm::class,'login']);
Route::view('form','formHttp');

// routing for session part
Route::view('login','login');
Route::post('login',[LoginController::class,'login']);
Route::view('profile','profile');
Route::get('logout',[LoginController::class,'logout']);

// routing for uploading
Route::view('upload','upload');
Route::post('uploading',[UploadController::class,'uploadFile']);

// mysql
Route::view('addStudent','add-student');
//submit
Route::post('added',[MysqlForm::class,'add']);
// showing list
Route::get('add',[MysqlForm::class,'showList']);
//delete table with id route
Route::get('delete/{id}',[MysqlForm::class, 'deleteList']);

//edit
Route::get('edit/{id}',[MysqlForm::class,'editList']);

//update edit data
Route::put('edit-student/{id}',[MysqlForm::class, 'updateData']);

//for searching
Route::get('search',[MysqlForm::class, 'searching']);

// router for sending mail
Route::post('send-mail',[MailController::class,'sendEmail']);

Route::view('MailForm',"MailForm");
