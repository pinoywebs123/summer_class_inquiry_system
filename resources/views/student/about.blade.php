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
	div p{
		color: #fff;
	}
	#content{
		margin-top: 10%;
	}
</style>
@endsection

@section('contents')
@include('template.navbar')
	

	<div id="content">
		<h1>What is Summer Class Inquiry System?</h1>
		<p>I personally develop this system when i have two subjects to be taken during summer/ I went to school April 9, 2017. And I have noticed students scattered everywhere, unorganized , and realy wasting their time. And for the part also of the teachers it was so stressful for them to answer one by one students. So something came out of my mind. Why not create a system like this? That will organize, help both students and teachers and make their life more easier, faster and completely comfortable.

		</p>
	</div>
@endsection

@section('scripts')

@endsection