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
				<img src="img6.jpg" alt="form" height="99%">


			</div>
			<form class="form-detail" action="register.php" method="POST" id="myform">
<?php include('error.php') ?>
				<div class="form-row">
					<label for="username">USERNAME</label>
					<input type="text" name="username" value="<?php echo $username;?>" class="input-text">
				</div>
				<div class="form-row">
					<label for="your_email">E-MAIL</label>
					<input type="text" name="email" value="<?php echo $email;?>" class="input-text" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
<div class="form-row">
					<label for="password">MOBILE NUMBER</label>
					<input type="text" name="mobileno" class="input-text" maxlength="10" minlength="10">
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password_1" class="input-text">
				</div>
				<div class="form-row">
					<label for="comfirm_password">CONFIRM PASSWORD</label>
					<input type="password" name="password_2" class="input-text">
				</div>
				<div class="form-row-last">
					<input type="submit" name="reg_user" class="register" value="Register">
					<p>Or<a href="login.php">Sign in</a> Or <a href="day.html">Home Page</a></p>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>
