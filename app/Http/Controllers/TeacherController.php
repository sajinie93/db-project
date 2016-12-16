<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Teacher_payment;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getSalary(){
//        $name=teacher::all(['name','id']);
        $salaries=(new Teacher_payment())->getAll();
        return view('teacherSalary',[
            'salries' => $salaries
        ]);
    }
    public function getTeachers(){
//        $name=teacher::all(['name','id']);
        $teachers=(new Teacher())->getAll();
        return view('teacherSalary',[
            'teachers' => $teachers
        ]);
    }

    public function getTeacher(Request $request){
//        $name=teacher::all(['name','id']);
        $teacher=(new Teacher())->getTeacher($request);
        $salaries=(new Teacher_payment())->getTeacher($request);
        return view('teacherDetail',[
            'teacher' => $teacher, 'salaries'=>$salaries
        ]);
    }
}
