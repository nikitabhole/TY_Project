<?php 
  $db = pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root");
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = pg_query($db, $sql_u);
  	$res_e = pg_query($db, $sql_e);

  	if (pg_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(pg_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	
  	}else{
           $query = "INSERT INTO users (username, email, password) 
      	    	  VALUES ('$username', '$email', '$password')";
           $results = pg_query($db, $query);
           echo 'Saved!';
           exit();
  	}
  }
?>
