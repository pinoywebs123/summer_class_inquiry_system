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
	body{
		background-color: #363549;
	}
	h1{
		color: #fff;
		font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
	#content{
		color: #fff;
	}
</style>
@endsection

@section('contents')
@include('template.navbar')
	<div>
		<h1>Contact Page</h1>
		<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sph!4v1491863830564!6m8!1m7!1s9EBHSjpmV771mtJGvudszg!2m2!1d9.589739449127324!2d123.131366133711!3f16.554385162585945!4f-11.990273555338604!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div id="content">
		
			
		<p>Address: </p>
		<p>Mobile: </p>
		<p>Fax:</p>
	</div>
@endsection

@section('scripts')

@endsection