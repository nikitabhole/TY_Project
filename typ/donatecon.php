<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
if(isset($_POST['submit']))
{
$name=$_POST['firstname'];
$email=$_POST['email'];
$add=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pincode'];
$rs=$_POST['rs'];
 //$q="insert into donation values('$name', '$email', '$add', '$city', '$state', '$pin', '$rs')";
$query = "INSERT INTO donation (name,email,address,city,state,pincode,amount)
  			  VALUES('$name', '$email', '$add', '$city', '$state', '$pin', '$rs')";
$rs=pg_query($conn,$query);
if($rs!=null)
{
echo "<font size='20pt'>Data inserted sucessfully</font>";
}
else
echo "<font size='20pt'>error</font>";
}
pg_close($conn);
?>
