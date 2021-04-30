<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=pg_query($conn,"select * from signup where user_id='$user_id' and pass='$pass'");
	if(pg_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
echo '<a href="login.php">logout';
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="login.css">
<body>
    <div class="loginbox">
<!--    <img src="img/avatar.png" class="avatar">-->
        <h1>Login Here</h1>
        <form name="form1" method="post">
            <p>Username</p>
            <input type="text" id="loginid2" name="user_id" placeholder="Enter Username" required">
            <p>Password</p>
            <input type="password" id="pass2" name="pass" placeholder="Enter Password" required>
            <input type="submit" id="submit" name="submit"  value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="regiter1.html">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="login.php">Please try again</p>';
		  }
		  ?>
 </center>
</form>

</div>
<center>
</body>
</html>
