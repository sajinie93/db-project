<?php

namespace App\Http\Controllers;

use App\Hall;
use App\Instrument;
use App\Module;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{

    public function addClassModule(){

        $modules = (new Module())->getAll();
        $instruments=(new Instrument())->getAll();
        $halls=(new Hall())->getAll();

        return view ('Admin.addClassModule',['modules'=>$modules,'instruments'=>$instruments,'halls'=>$halls]);
    }

}
