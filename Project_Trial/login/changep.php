<?php
session_start();
$id = $_SESSION["user_id"];/* userid of the user */
$con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from student WHERE name='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
mysqli_query($con,"UPDATE student set password='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>

