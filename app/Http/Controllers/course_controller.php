<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fecades\DB;

// Model
use App\Models\course;

class course_controller extends Controller
{
    // Show all data in database
    function getAllCourse(){
        $data = course::all();
        return view('courselist',['course'=>$data]);
    }

    // Insert data in database
    function addCourse(Request $req){
        $course = new course;
        $course->course_name = $req->course_name;
        $course->course_code = $req->course_code;
        $course->course_duration = $req->course_duration;
        $course->save();
        return redirect('add_course');
    }

    // Delete data in database
    function deleteCourse($id){
        $data = course::find($id);
        $data->delete();
        return redirect('courselist');
    }

    function editCourse($id){
        $data = course::find($id);
        return view('editcourse',['course'=>$data]);
    }

    // update data in database
    function updateCourse(Request $req){
        $course = course::find($req->id);
        $course->course_name = $req->course_name;
        $course->course_code = $req->course_code;
        $course->course_duration = $req->course_duration;
        $course->save();
        return redirect('courselist');
    }
}
