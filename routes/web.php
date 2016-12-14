<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

///////////////////////////////////////////////////////////////
Route::get('/', function () {
//   admin = 1 teacher = 2

//    var_dump(Auth::check());
    if(Auth::check()){

        if(Auth::user()->rank == 1){

//            return redirect()->route('admin');
            return view('Admin.index');
        }else{
//            return redirect()->route('teacher');
            return view('Teacher.index');
        }

        // return redirect()->route('teacher');
    }
    return view('auth.login');
})->name('first_page');



Route::get('/type', 'CourseController@SignUp');

Auth::routes();

Route::get('/home', 'HomeController@index');

///////////////////////////////////////////////////// admin

Route::get('/admin',function(){
    return view ('Admin.dashboard');
});

Route::get('/addModule', [
    'uses' => 'ModuleController@addModule',
    'as' => 'add_module'
]);