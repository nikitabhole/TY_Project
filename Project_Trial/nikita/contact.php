<?php 
  //creating connection to database
$con=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("connection failed");

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['contact'];
$comments =$_POST['text'];

  //query to insert the variable data into the database
$sql="insert into contact values('$Name','$Email','$Phone','$comments')";
echo "nikita";
$result=pg_query($con,$sql);
echo "hii";
  //Execute the query and returning a message
if($result!=null){
   echo "Thank you! We will get in touch with you soon";
}
else
die('Error occured [' . $pg_error . ']');
}
pg_close($con);
?>
