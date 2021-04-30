<?php 

/*if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}*/
$db =pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
if(isset($_POST['submit'])) 
{
	// receive all input values from the form
	$hname=$_POST['hname'];
	$ename= $_POST['ename'];
	$edate=$_POST['edate'];
	$timefrom=$_POST['timefrom'];
	$timeto = $_POST['timeto'];
	$venue= $_POST['venue'];  
	$event= $_POST['event'];
$dd=date("m-d-y",strtotime($edate));
	$user_check_query = "SELECT * FROM event WHERE edate='$dd'";
	$result = pg_query($db, $user_check_query);
	$user= pg_num_rows($result);
	if($user>0) 
	{ // if user exists
		echo "Sryy!!!!There is already event on this date";
	}
	else
	{
		$query = "INSERT INTO event (host_name,ename,edate,timefrom,timeto,venue,managed_for)
			VALUES('$hname', '$ename', '$dd', '$timefrom', '$timeto', '$venue', '$event')";

		$rs=pg_query($db,$query);
		if($rs!=null)
		{
			echo"<font size='20pt'>Details added sucessfully</font>";  

		}
else
echo "<font size='20pt'>error</font>";
	}
}
pg_close($db);
?>
