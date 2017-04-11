@extends('template.default')

@section('styles')
<style type="text/css">
	nav{
		margin-bottom: 0px !important;
	}
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
	#conentData{
		margin-top: 5%;
	}
	.col-md-4{
		
		color: #fff;
	}
	.badge{
		background-color: blue;
	}
	body{
		background-color: #363549;
	}


</style>
@endsection

@section('contents')
@include('template.navbar')
<div class="row" id="conentData">
	<div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="text-center">My Profile</h3>
			</div>
			<div class="panel-body">
				<center><img src="{{URL::to('images/teacher.png')}}" width="58px"></center>
				<p class="text-center"><strong>Name: </strong>{{Auth::user()->lname}}, {{Auth::user()->fname}} {{Auth::user()->mname}}</p>
			</div>
		</div>
	</div>

	<div class="col-md-9">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="text-center">List of Students</h3>
			</div>
			<div class="panel-body">
				<h2 class="text-center">{{$subject->code}}</h2>
				<p class="text-center">{{$subject->description}}</p>
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
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')

@endsection