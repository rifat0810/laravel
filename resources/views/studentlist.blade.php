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
                  <th>Full_name</th> 
                  <th>Student_id</th> 
                  <th>Father_name</th> 
                  <th>Mother_name</th>
                  <th>Email</th> 
                  <th>Date of birth</th>
                  <th>Course Info</th>
                  <th>Edit</th>
                  <th>Delete</th>  
                </tr> 
              </thead> 
              @foreach($student as $number)
              <tbody> 
                <tr> 
                  <td>{{$number['id']}}</td> 
                  <td>{{$number['full_name']}}</td> 
                  <td>{{$number['student_id']}}</td> 
                  <td>{{$number['father_name']}}</td> 
                  <td>{{$number['mother_name']}}</td> 
                  <td>{{$number['email']}}</td> 
                  <td>{{$number['date']}}</td> 
                  <td><a class="btn btn-primary" href={{"studentallinformation/".$number['student_id']}}>View</a></td> 
                  <td><a class="btn btn-primary" href={{"editStudent/".$number['id']}}>Edit</a></td> 
                  <td><a class="btn btn-danger" href={{"deleteStudent/".$number['id']}}>Delete</a></td>
                </tr> 
                @endforeach
              </tbody> 
            </table> 
					</div>
				</div>
	    </div>
        </div>
@stop
