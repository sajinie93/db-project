<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function getAllStudents(){
        $all_students = Student::all();
        return view('student', [
            'students' => $all_students
        ]);
    }

    public function saveStudent(Request $request){

//        $this->validate($request,[
//            'std_first_name' => 'required|max:15',
//            'std_middle_name' => 'required|max:15',
//            'std_last_name' => 'required|max:15',
//            'address' => 'required',
//            'gender' => 'required',
//            'dob' => 'required'
//        ]);


        $first_name = $request['std_first_name'];
        $middle_name = $request['std_middle_name'];
        $last_name = $request['std_last_name'];
      //  $address = $request['address'];
        $gender = $request['gender'];
        $dob = $request['dob'];

        DB::statement("INSERT INTO student(student_id, std_first_name, std_middle_name, std_last_name, std_gender)
                      VALUES('10', '$first_name', '$middle_name', '$last_name', 'MALE')");



//        $student = new Student;
//        $student->std_first_name = $first_name;
//        $student->std_middle_name = $middle_name;
//        $student->std_last_name = $last_name;
//        $student->address = $address;
//        $student->gender = $gender;
//        $student->dob = $dob;
//
//        $student->save();

        return redirect()->route('add_student');
    }

    public function getAllCourses(){
        $all_courses = Course::all();   // fetch data from database
        return view('Admin.addStudent',[
            'courses' => $all_courses
        ]);
    }
}
