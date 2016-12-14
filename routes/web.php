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

Route::group(['middleware' => ['web']], function (){

    Route::get('/admin', function () {
        return view('Admin.dashboard');
    });

    Route::get('/addClassModule', [
        'uses' => 'AdminController@addClassModule',
        'as' => 'add_class_module'
    ]);

    Route::post('/saveClassModule', [
        'uses' => 'ClassModuleController@saveClassModule',
        'as' => 'save_class_module'
    ]);

    Route::get('/addInstrument', function () {
        return view('Admin.addInstrument');
    })->name('add_instrument');

    Route::post('/saveInstrument', [
        'uses' => 'InstrumentController@saveInstrument',
        'as' => 'save_instrument'
    ]);

    Route::get('/addHall', [
        'uses' => 'HallController@AddHall',
        'as' => 'add_hall'
    ]);
    Route::post('/saveHall', [
        'uses' => 'HallController@SaveHall',
        'as' => 'save_hall'
    ]);


    Route::get('/addModule', [
        'uses' => 'ModuleController@AddModule',
        'as' => 'add_module'
    ]);

    Route::post('/saveModule', [
        'uses' => 'ModuleController@SaveModule',
        'as' => 'save_module'
    ]);


});