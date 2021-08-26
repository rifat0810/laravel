@extends('layouts.base')
@section('content')
<div id="page-wrapper">
			<div class="main-page">
			<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> 
              <thead> 
                <tr> 
                  <th>Id</th> 
                  <th>Course_name</th> 
                  <th>Course_code</th> 
                  <th>Course_duration</th> 
                  <th>Edit</th>
                  <th>Delete</th>  
                </tr> 
              </thead> 
              @foreach($course as $number)
              <tbody> 
                <tr> 
                  <td>{{$number['id']}}</td> 
                  <td>{{$number['course_name']}}</td> 
                  <td>{{$number['course_code']}}</td> 
                  <td>{{$number['course_duration']}} hours</td> 
                  <td><a class="btn btn-primary" href={{"editCourse/".$number['id']}}>Edit</a></td> 
                  <td><a class="btn btn-danger" href={{"deleteCourse/".$number['id']}}>Delete</a></td>
                </tr> 
                @endforeach
              </tbody> 
            </table> 
					</div>
				</div>
	    </div>
        </div>
@stop
