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
			  <li role="presentation"><a href="{{route('subject', ['subject_id'=> $subject->id])}}">List Student</a></li>
			  <li role="presentation" class="active"><a href="#">Reserve Now</a></li>
			  
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
			<div class="col-md-6">
				@if(Session::has('id_error'))
					<div class="alert alert-danger">{{Session::get('id_error')}}</div>
				@endif
				<form action="{{route('add_student', ['subject_id'=> $subject->id])}}" method="POST">
					<div class="form-group {{$errors->has('lname') ? 'has-error' : ''}}">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control">
						@if($errors->has('lname'))
							<span class="help-block">{{$errors->first('lname')}}</span>
						@endif
					</div>
					<div class="form-group {{$errors->has('fname') ? 'has-error' : ''}}">
						<label>First Name</label>
						<input type="text" name="fname" class="form-control">
						@if($errors->has('fname'))
							<span class="help-block">{{$errors->first('fname')}}</span>
						@endif
					</div>
					<div class="form-group {{$errors->has('mname') ? 'has-error' : ''}}">
						<label>Middle Name</label>
						<input type="text" name="mname" class="form-control">
						@if($errors->has('mname'))
							<span class="help-block">{{$errors->first('mname')}}</span>
						@endif
					</div>
					<div class="form-group {{$errors->has('dob') ? 'has-error' : ''}}">
						<label for="dob">Date of Birth</label>
						<input type="date" name="dob" class="form-control">
						@if($errors->has('dob'))
							<span class="help-block">{{$errors->first('dob')}}</span>
						@endif
					</div>
					<div class="form-group {{$errors->has('addr') ? 'has-error' : ''}}">
						<label for="addr">Address</label>
						<textarea class="form-control" rows="5" name="addr"></textarea>
						@if($errors->has('addr'))
							<span class="help-block">{{$errors->first('addr')}}</span>
						@endif
					</div>
				
			</div>

			<div class="col-md-6">

				<div class="form-group {{$errors->has('student_id') ? 'has-error' : ''}}">
					<label class="stdid">Student ID</label>
					<input type="text" name="student_id" class="form-control">
					@if($errors->has('student_id'))
							<span class="help-block">{{$errors->first('student_id')}}</span>
						@endif
				</div>

				<div class="form-group {{$errors->has('course') ? 'has-error' : ''}}">
					<label>Course</label>
					<select class="form-control" name="course">
						<option value="BSIT">BSIT</option>
						<option value="BSCS">BSCS</option>
						<option value="BSCrim">BSCrim</option>
						<option value="CIT">CIT</option>
					</select>
				</div>

				<div class="form-group {{$errors->has('year') ? 'has-error' : ''}}">
					<label>Year</label>
					<select class="form-control" name="year">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="form-group {{$errors->has('campus') ? 'has-error' : ''}}">
					<label>Campus</label>
					<select class="form-control" name="campus">
						<option value="1">1</option>
						<option value="2">2</option>
						
					</select>
				</div>

				<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control">
					@if($errors->has('email'))
							<span class="help-block">{{$errors->first('email')}}</span>
						@endif
				</div>
				<div class="form-group {{$errors->has('contact') ? 'has-error' : ''}}">
					<label for="contact">Contact</label>
					<input type="number" name="contact" class="form-control">
					@if($errors->has('contact'))
							<span class="help-block">{{$errors->first('contact')}}</span>
						@endif
				</div>

				<button type="submit" class="btn btn-info btn-block btn-lg">Submit</button>
				{{csrf_field()}}
				</form>
			</div>
		</div>
	</div>
</div>


</div>
@endsection

@section('scripts')

@endsection