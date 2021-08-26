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
                  <th>Student_id</th> 
                  <th>Full_name</th> 
                  <th>Course_name</th>
                  <th>Course_code</th>  
                </tr> 
              </thead> 
              @foreach($studentcourse as $number)
              <tbody> 
                <tr> 
                  <td>{{$number['id']}}</td> 
                  <td>{{$number['student_id']}}</td> 
                  <td>{{$number['full_name']}}</td> 
                  <td>{{$number['course_name']}}</td> 
                  <td>{{$number['course_code']}}</td> 
                </tr> 
                @endforeach
              </tbody> 
            </table> 
					</div>
				</div>
	    </div>
        </div>
@stop
