<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassModuleController extends Controller
{
    public function getAllCourses(){
        $all_courses = Course::all();   // fetch data from database
        if(Auth::user()->rank == 1){
            return view('Admin.course',[
                'courses' => $all_courses
            ]);
        }else {
            return view('Teacher.course', [
                'courses' => $all_courses
            ]);
        }
    }

    public function saveCourse(Request $request){

        $name = $request['name'];
        $module_code = $request['module_code'];
        $fee = $request['fee'];
        $type = $request['type'];

        $course = new Course();
        $course->name = $name;
        $course->module_code = $module_code;
        $course->fee = $fee;
        $course->type = $type;

        $course->save();

        return redirect()->route('courseDetail');

    }

    public function viewAddCoursePage(){
        $all_courses = Course::all();   // fetch data from database
        return view('Admin.addCourse',[
            'courses' => $all_courses
        ]);

    }

    public function searchCourse($id){
        $courses = Course::find($id);
        return view('Admin.course', [
            'courses' => $courses,

        ]);

    }




}
