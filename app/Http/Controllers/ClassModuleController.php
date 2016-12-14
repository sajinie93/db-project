<?php

namespace App\Http\Controllers;

use App\Class_module;
use App\Module;
use Illuminate\Http\Request;

class ClassModuleController extends Controller
{
//    public function getAllCourses(){
//        $all_courses = Course::all();   // fetch data from database
//        if(Auth::user()->rank == 1){
//            return view('Admin.course',[
//                'courses' => $all_courses
//            ]);
//        }else {
//            return view('Teacher.course', [
//                'courses' => $all_courses
//            ]);
//        }
//    }

    public function saveClassModule(Request $request){

        (new Class_module())->saveClassModule($request);
//        (new Module())->saveModule($request);

        return redirect()->route('add_class_module');

    }

//    public function viewAddCoursePage(){
//        $all_courses = Course::all();   // fetch data from database
//        return view('Admin.addCourse',[
//            'courses' => $all_courses
//        ]);
//
//    }
//
//    public function searchCourse($id){
//        $courses = Course::find($id);
//        return view('Admin.course', [
//            'courses' => $courses,
//
//        ]);
//
//    }




}
