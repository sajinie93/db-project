<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{

    public function addModule(){

        $modules = (new Module())->getAll();

        return view ('Admin.addModule',['modules'=>$modules]);
    }

}
