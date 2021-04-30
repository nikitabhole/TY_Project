<?php
session_start();
$username ="";
$email ="";
// initializing variables
$errors = array(); 

// connect to the database
$db = pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root");

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mono= $_POST['mobileno'];
	$password_1 =$_POST['password_1'];
	$password_2 = $_POST['password_2'];

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($mono)) { array_push($errors, "Mobile no  is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// first check the database to make sure 
	// a user does not already exist with the same username and/or email
	$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
	$result = pg_query($db, $user_check_query);
	$user = pg_fetch_assoc($result);

	if ($user) { // if user exists
		if ($user['username'] === $username) {
			array_push($errors, "Username already exists");
		}

		if ($user['email'] === $email) {
			array_push($errors, "email already exists");
		}
	}

	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
$password=$password_1;
		//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, email,mobileno, password) 
			VALUES('$username','$email', '$mono', '$password')";
		pg_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now registered";
		header('location: login.php');
	}
}

pg_close($db);

?>
