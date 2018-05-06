<!DOCTYPE html>
<html>
	<head>
		<title>Live Email Availability in Laravel using Ajax</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.box{
				width:600px;
				margin:0 auto;
				border:1px solid #ccc;
			}
			.has-error
			{
				border-color:#cc0000;
				background-color:#ffff99;
			}
		</style>
	</head>
	<body>
		<br />
		<div class="container box">
			<h3 align="center">Live Email Availability in Laravel using Ajax</h3><br />
			
			<div class="form-group">
				<label>Enter Your Email</label>
				<input type="text" name="email" id="email" class="form-control input-lg" />
				<span id="error_email"></span>
			</div>
			<div class="form-group">
				<label>Enter Your Password</label>
				<input type="password" name="password" id="password" class="form-control input-lg" />
			</div>
			<div class="form-group" align="center">
				<button type="button" name="register" id="register" class="btn btn-info btn-lg">Register</button>
			</div>
			{{ csrf_field() }}
			
			<br />
			<br />
		</div>
	</body>
</html>

<script>
$(document).ready(function(){

	$('#email').blur(function(){
		var error_email = '';
		var email = $('#email').val();
		var _token = $('input[name="_token"]').val();
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if($.trim(email).length > 0)
		{
			if(!filter.test(email))
			{				
				$('#error_email').html('<label class="text-danger">Invalid Email</label>');
				$('#email').addClass('has-error');
				$('#register').attr('disabled', 'disabled');
			}
			else
			{
				$.ajax({
					url:"{{ route('email_available.check') }}",
					method:"POST",
					data:{email:email, _token:_token},
					success:function(result)
					{
						if(result == 'unique')
						{
							$('#error_email').html('<label class="text-success">Email Available</label>');
							$('#email').removeClass('has-error');
							$('#register').attr('disabled', false);
						}
						else
						{
							$('#error_email').html('<label class="text-danger">Email not Available</label>');
							$('#email').addClass('has-error');
							$('#register').attr('disabled', 'disabled');
						}
					}
				})
			}
		}
		else
		{
			$('#error_email').html('<label class="text-danger">Email is required</label>');
			$('#email').addClass('has-error');
			$('#register').attr('disabled', 'disabled');
		}
	});
	
});
</script>