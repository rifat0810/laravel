@extends('layouts.base')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
	    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Basic Form :</h4>
			</div>
			<div class="form-body">
				<form action="add_student" method="post">
                    @csrf
                    <div class="form-group"> 
                        <label for="exampleInputText"> Student Full Name</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="full_name" placeholder="Student Full Name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputText">Student Id</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="student_id" placeholder="Student Id"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputText">Father Name</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="father_name" placeholder="Father Name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputText">Mother's Name</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="mother_name" placeholder="Mother Name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Email address</label> 
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email"> 
                    </div>  
                    <div class="form-group"> 
                        <label for="exampleInputFile">Date oF Birth</label> <input type="date" id="exampleInputDate" name="date" placeholder="Date of birth"> 
                    </div>  
                    <button type="submit" class="btn btn-default">Submit</button> 
                </form> 
			</div>
		</div>		
	</div>
</div>
@stop
