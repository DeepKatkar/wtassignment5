<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usre Registraion | PHP </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>
</div>

<div>
	<form action="registration.php" method="post">
		<div clas="container">

			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the Form with correct values</p>
					<hr class="mb-3">
					<lebel for="firstname"><b>First Name</b></lebel>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<lebel for="lastname"><b>Last Name</b></lebel>
					<input class="form-control" id="lastname" type="text" name="lastname" required>

					<lebel for="email"><b>Email Address</b></lebel>
					<input class="form-control" id="email" type="email" name="email" required>

					<lebel for="phonenumber"><b>Phone No.</b></lebel>
					<input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

					<lebel for="password"><b>Password</b></lebel>
					<input class="form-control" id="password" type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
			    </div>
		    </div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(){

			var valid = this.form.checkValidiy();

			if(valid){

			var firstname   = $('#firstname').val();
			var lastname    = $('#lastq	name').val();
			var email       = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password   = $('#password').val();


				e.prevenDefault();

				$.ajax({
					type: 'POST',
					url:'process.php',
					data: {firstname: firsname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
						swal.fire({
							'title' : 'Successful',
							'text' : data,
							'type' : 'success'
							})
					},
					error: function(data){
						swal.fire({
							'title' : 'error',
							'text' : 'There were errors while saving the data.',
							'type' : 'error'
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








