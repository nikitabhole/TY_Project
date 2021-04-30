<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//$user_id=$_POST['user_id'];
//$login=$_POST['login'];
//$pass=$_POST['pass'];

//$name=$_POST['name'];

//$email=$_POST['email'];
extract($_POST);
include("database.php");
$rs1=pg_query($conn,"select * from signup where user_id='$user_id'");
if(pg_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
else
$query="insert into signup values('$user_id','$login','$pass','$name','$email')";
$rs2=pg_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $user_id Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";


?>
</body>
</html>

