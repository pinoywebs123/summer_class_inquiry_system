@extends('template.default')

@section('styles')
<style type="text/css">
	.navbar-default{
		background-color: #5a85c9 !important;
		border: 2px solid #74a2ed;
		
	}
	.navbar-default .navbar-nav>li>a{
		color: #fff !important;

	}
	.navbar-default .navbar-brand{
		color: #fff !important;
	}
	.navbar-default .navbar-collapse, .navbar-default .navbar-form{
		background-color: #5a85c9 !important;
	}
	.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
		background-color: #0c264f;
	}
	body{
		background-color: #363549;
	}
</style>
@endsection

@section('contents')
@include('template.navbar')
<div class="row">
	<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h2 class="text-center">Actions</h2>
		</div>
		<div class="panel-body">
			<ul class="nav nav-pills nav-stacked">
			  <li role="presentation" class="active"><a href="{{route('subject', ['subject_id'=> $subject->id])}}">List Student</a></li>
			  <li role="presentation"><a href="{{route('new_student', ['subject_id'=> $subject->id])}}">Reserve Now</a></li>
			  
			</ul>
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h2>{{$subject->code}} - {{$subject->description}}</h2>
		</div>
		<div class="panel-body">
			@if(Session::has('success'))
				<div class="alert alert-success">
					{{Session::get('success')}}
				</div>
			@endif
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Campus</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Course</th>
						<th>Year</th>
						<th>Contact</th>
					</tr>
				</thead>
				<tbody>
					
						@foreach($students as $student)
							<tr>
								<td>{{$student->student->id}}</td>
								<td>{{$student->student->campus}}</td>
								<td>{{$student->student->lname}}</td>
								<td>{{$student->student->fname}}</td>
								<td>{{$student->student->mname}}</td>
								<td>{{$student->student->course}}</td>
								<td>{{$student->student->year}}</td>
								<td>{{$student->student->contact}}</td>
							</tr>
							
						@endforeach
						
				</tbody>
			</table>
			<div class="text-center">
				{{$students->links()}}
			</div>
		</div>
	</div>
</div>
</div>
@endsection

@section('scripts')

@endsection