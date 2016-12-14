<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use DB;

class Module
{

    public function getAll(){
        $modules = DB::select('SELECT * FROM module');
        return $modules;
    }
    // add new module to the database
//    public function addModule(){
//        DB::statement("INSERT INTO student(student_id, std_first_name, std_middle_name, std_last_name, std_gender)
//                      VALUES('10', '$first_name', '$middle_name', '$last_name', 'MALE')");
//
//    }



}
