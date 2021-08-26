@extends('layouts.base')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
	    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
			<div class="form-title">
				<h4>Course Form :</h4>
			</div>
			<div class="form-body">
				<form action="/update_course" method="post">
                    @csrf 
                    <div class="form-group"> 
                        <input type="hidden" class="form-control" id="exampleInputText" name="id" value="{{$course['id']}}"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputText">Course Name</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="course_name" value="{{$course['course_name']}}" placeholder="Course Name"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputText">Course Code</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="course_code"  value="{{$course['course_code']}}" placeholder="Course Code"> 
                    </div>
                    <div class="form-group"> 
                        <label for="exampleInputText">Course Duration</label> 
                        <input type="text" class="form-control" id="exampleInputText" name="course_duration" value="{{$course['course_duration']}}" placeholder="Course Duration"> 
                    </div>  
                    <button type="submit" class="btn btn-default">Submit</button> 
                </form> 
			</div>
		</div>		
	</div>
</div>
@stop
