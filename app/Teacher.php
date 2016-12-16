<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Teacher extends Model
{
    //defining one ot one relationship : reverse

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public  function getAll(){
        $teachers=DB::select('select * from teacher');
        return $teachers;
    }

    public  function getTeacher(Request $request){
        $teacher=DB::select('select * from teacher where teacher_id'.$request['teacher_id']);
        return $teacher;
    }
}
