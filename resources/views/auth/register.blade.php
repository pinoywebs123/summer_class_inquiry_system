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
	.input-group{
		margin-bottom: 10px;
	}
	.well{
		border-radius: 20px;
	}
</style>
@endsection

@section('contents')
@include("template.navbar")
<div class="col-md-4 col-md-offset-4 well">
	<h3 class="text-center">Register Now</h3>

	<form action="" method="POST" id="registerForm">
		<div id="firstContent">
			<div class="input-group">
				<span class="input-group-addon" id="1"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="lname" id="lname" class="form-control" aria-describedby="1" placeholder="Enter Last Name">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="1"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="fname" id="fname" class="form-control" aria-describedby="1" placeholder="Enter First Name">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="1"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="mname" id="mname" class="form-control" aria-describedby="1" placeholder="Enter Middle Name">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="1"><i class="glyphicon glyphicon-phone"></i></span>
				<input type="number" name="contact" id="contact" class="form-control" aria-describedby="1" placeholder="Enter Contact Number">
			</div>
			<div class="form-group">
				<label for="addr">Address</label>
				<textarea class="form-control" rows="5" name="addr" id="addr"></textarea>
			</div>

			<button class="btn btn-primary btn-block btn-lg" type="button" id="nextBtn">Next</button>
		</div>

		<div id="secondContent" style="display: none">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
			</div>

			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
			</div>

			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password">
			</div>

			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" name="pass2" id="pass2" class="form-control" placeholder="Repeat Password">
			</div>

			<button class="btn btn-danger btn-block btn-lg" id="submitBtn">Submit</button>
			{{csrf_field()}}
		</div>
	</form>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	function validate(shue){
		var div = $("#"+shue).closest("div");
		div.removeClass("has-error has-success");
		if($("#"+shue).val() == ""){
			
			div.addClass("has-error");
			return false;
		}else{

			div.addClass("has-success");
			return true;
		}
	}

	function passcheck(){
		if($("#pass").val() == $("#pass2").val()){

			return true;
		}else{
			alert("Password do not match");

			return false;
		}
	}

	$(document).ready(function(){
		$("#nextBtn").click(function(){
			if(!validate("lname")){
				return false;
			}
			if(!validate("fname")){
				return false;
			}
			if(!validate("mname")){
				return false;
			}
			if(!validate("contact")){
				return false;
			}
			
			if(!validate("addr")){
				return false;
			}

			$("#firstContent").fadeOut(2000);
			$("#secondContent").fadeIn(4000);

			$("#submitBtn").click(function(){
				if(!validate("email")){
					return false;
				}
				if(!validate("username")){
					return false;
				}
				if(!validate("pass")){
					return false;
				}
				if(!validate("pass2")){
					return false;
				}
				if(!passcheck()){
					return false;
				}

				$("form#registerForm").submit();
			});
		});
	});
</script>
@endsection