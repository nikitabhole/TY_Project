<?php
session_start();
$id = $_SESSION["user_id"];/* userid of the user */
$con = mysqli_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die('Unable To connect');
if(count($_POST)>0) {
$result = pg_query($con,"SELECT * from signup WHERE user_id='" . $id . "'");
$row=pg_fetch_array($result);
if($_POST["user_id"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
pg_query($con,"UPDATE student set password='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
$message = "Password Changed Sucessfully";
} else{
 $message = "Password is not correct";
}
}
?>

