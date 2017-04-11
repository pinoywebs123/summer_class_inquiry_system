@extends('template.default')

@section('styles')
<style type="text/css">
	
	.well center img{
		margin-top: -70px;
	}
	.well{
		border-radius: 20px;
		margin-top: 10%;
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
	body{
		background-color: #363549;
	}
</style>
@endsection

@section('contents')
@include('template.navbar')

<div class="col-md-4 col-md-offset-4 well">
	<center><img src="{{URL::to('images\logo.jpg')}}" class="img-circle" height="120px" width="120px"></center>
	<form action="{{route('login_check')}}" method="POST">
		<div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control">
			@if($errors->has('username'))
				<span class="help-block">{{$errors->first('username')}}</span>
			@endif
		</div>
		<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control">
			@if($errors->has('password'))
				<span class="help-block">{{$errors->first('password')}}</span>
			@endif
		</div>
		<div class="checkbox">
		  <label>
		  <input type="checkbox" value="" name="remember">Remember Me</label>
		</div>
		<button type="submit" class="btn btn-primary btn-lg btn-block">Log-In</button>
		{{csrf_field()}}
	</form>

	<p class="text-center"><a href="{{route('register')}}" style="color: gray">No Account?</a></p>

	@if(Session::has('invalid'))
		<div class="alert alert-danger">{{Session::get('invalid')}}</div>
	@endif
</div>
@endsection

@section('scripts')

@endsection