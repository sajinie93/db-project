<?php

namespace App\Http\Controllers;



use App\StudentRegistration;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function AddStudent()
    {
        return view('Admin.addStudent');
    }

    public function SaveStudent(Request $request)
    {
        (new StudentRegistration)->SaveStudent($request);
        return redirect()->route('add_student');
    }

}

//        $this->validate($request,[
//            'std_first_name' => 'required|max:15',
//            'std_middle_name' => 'required|max:15',
//            'std_last_name' => 'required|max:15',
//            'address' => 'required',
//            'gender' => 'required',
//            'dob' => 'required'
//        ]);