<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	
    <link rel="stylesheet" href="register.css"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="img6.jpg" alt="form" height="100%">


			</div>
			<form class="form-detail" action="register.php" method="POST" id="myform">
<?php include('error.php') ?>
				<div class="form-row">
					<label for="username">USERNAME</label>
					<input type="text" name="username" value="<?php echo $username; ?>" id="username" class="input-text">
				</div>
				<div class="form-row">
					<label for="your_email">E-MAIL</label>
					<input type="text" name="email" value="<?php echo $email; ?>" id="email" class="input-text" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
<div class="form-row">
					<label for="password">MOBILE NUMBER</label>
					<input type="text" name="mobileno" id="mobileno" class="input-text" maxlength="10" minlength="10">
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password_1" id="password_1" class="input-text">
				</div>
				<div class="form-row">
					<label for="comfirm_password">CONFIRM PASSWORD</label>
					<input type="password" name="comfirm_password" id="password_2" class="input-text">
				</div>
				<div class="form-row-last">
					<input type="submit" name="reg_user" class="register" value="Register">
					<p>Or<a href="login.php">Sign in</a></p>
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    email: {
			      	required: true,
			      	email: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password_1"
		    	}
		  	},
		  	messages: {
		  		username: {
		  			required: "Please enter an username"
		  		},
		  		email: {
		  			required: "Please provide an email"
		  		},
mobileno: {
		  			required: "Please provide an mobile number"
		  		},
		  		password_1: {
	  				required: "Please provide a password"
		  		},
		  		comfirm_password: {
		  			required: "Please provide a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		});
	</script>
</body>
</html>
