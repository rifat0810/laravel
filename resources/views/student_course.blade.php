@extends('layouts.base')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
	    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Basic Form :</h4>
			</div>
			<div class="form-body">
				<form action="add_student_cousre" method="post">
                    @csrf
                    <div class="form-group"> 
                        <label for="exampleInputText">Student Id</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="student_id" placeholder="Student Id"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Student Full Name</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="student_name" placeholder="Student Full Name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Course Name</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="course_name" placeholder="Course Name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Course Code</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="course_code" placeholder="Course Code"> 
                    </div>  
                    <button type="submit" class="btn btn-default">Submit</button> 
                </form> 
			</div>
		</div>		
	</div>
</div>
@stop
