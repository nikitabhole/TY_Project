<?php
session_start();
include("dbconnection.php");
if(isset($_POST['Submit']))
{
 $oldpass=$_POST['opwd'];
 $useremail=$_SESSION['login'];
 $newpassword=$_POST['npwd'];
$sql=pg_query($con,"select pass from signup where pass='$oldpass' && user_id='$useremail'");
$num=pg_fetch_array($sql);
if($num>0)
{
 $con=pg_query($con,"update signup set pass='$newpassword' where user_id='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
