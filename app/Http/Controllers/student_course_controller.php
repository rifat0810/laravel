<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fecades\DB;

// Model 
use App\Models\student_course;

class student_course_controller extends Controller
{
    function getAllStudentCourse(){
        $data = student_course::all();
        return view('studentcourselist',['studentcourse'=>$data]);
    }

    function addStudentCourse(Request $req){
        $student_course = new student_course;
        $student_course->student_id = $req->student_id;
        $student_course->full_name = $req->student_name;
        $student_course->course_name = $req->course_name;
        $student_course->course_code = $req->course_code;
        $student_course->save();
        return redirect('student_course');
    }
}
