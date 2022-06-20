<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Register</h1>
					<p>Fill up the form </p>
					<hr class="mb-3">
					
					<input class="form-control" id="firstname" type="text" name="firstname" placeholder="First Name" required><br>

					
					<input class="form-control" id="lastname"  type="text" name="lastname" placeholder="Last Name" required>

					<br>
					<input class="form-control" id="username"  type="text" name="username" placeholder="Username" required><br>

					
					<input class="form-control" id="email"  type="email" name="email" placeholder="Email Address" required><br>

					
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" placeholder="Phone Number" required><br>

					
					<input class="form-control" id="password1"  type="password" name="password1" placeholder="Password" required><br>
					<input class="form-control" id="password2"  type="password" name="password2" placeholder="Confirm Password" required><br>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var username	= $('#username').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password1 	= $('#password1').val();
			var password2 	= $('#password2').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,username: username,email: email,phonenumber: phonenumber,password1: password1,password2:password2},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>