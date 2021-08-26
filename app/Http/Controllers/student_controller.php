<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


// Model
use App\Models\student;
use App\Models\student_course;

class student_controller extends Controller
{
    // show all data in database
    function getAllStudent(){
        $data = student::all();
        return view('studentlist',['student'=>$data]);
    }
    // Insert data in database
    function addStudent(Request $req){
        $student = new student;
        $student->full_name = $req->full_name;
        $student->student_id = $req->student_id;
        $student->father_name = $req->father_name;
        $student->mother_name = $req->mother_name;
        $student->email = $req->email;
        $student->date = $req->date;
        $student->save();
        return redirect('add_student');
    }
    
    //Delete data in database
    function deleteStudent($id){
        $data = student::find($id);
        $data->delete();
        return redirect('studentlist');
    }

    function editStudent($id){
        $data = student::find($id);
        return view('editstudent',['student'=>$data]);
    }

    //update data in database
    function updateStudent(Request $req){
        $student = student::find($req->id);
        $student->full_name = $req->full_name;
        $student->student_id = $req->student_id;
        $student->father_name = $req->father_name;
        $student->mother_name = $req->mother_name;
        $student->email = $req->email;
        $student->date = $req->date;
        $student->save();
        return redirect('studentlist');
    }

    // join two table 
    function studentallinfo($id){
        $data = DB::table('students')
                    ->join('student_courses','student_courses.student_id','=','students.student_id')
                    ->where('student_courses.student_id',$id)
                    ->get();
        return view('studentallinfo',['studentinfo'=>$data]);
    }
}
