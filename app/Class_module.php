<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Class_module
{
    public function saveClassModule(Request $request){
        $class_module_id = $request['class_module_id'];
        $module_code = $request['module_code'];
        $hall_name = $request['hall_name'];
        $class_type = $request['class_type'];
        $monthly_class_fee = $request['monthly_class_fee'];
        $num_students = $request['num_students'];
        $teacher_fee_percentage = $request['teacher_fee_percentage'];

        DB::statement("INSERT INTO class_module(class_module_id, module_code, hall_name, class_type,monthly_class_fee,num_students,teacher_fee_percentage)
                      VALUES('$class_module_id','$module_code', '$hall_name', '$class_type','$monthly_class_fee','$num_students','$teacher_fee_percentage')");

    }
}
