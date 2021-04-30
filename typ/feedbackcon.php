<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
if(isset($_POST['submit']))
{
$name=$_POST['firstname'];
$email=$_POST['email'];
$message=$_POST['message'];
 //$q="insert into donation values('$name', '$email', '$add', '$city', '$state', '$pin', '$rs')";
$query = "INSERT INTO feedback(name,email,message)
  			  VALUES('$name', '$email', '$message')";
$rs=pg_query($conn,$query);
if($rs!=null)
{
echo "<font size='20pt'>Feedback Submitted sucessfully</font>";
}
else
echo "<font size='20pt'>error</font>";
}
pg_close($conn);
?>
