<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$message=$_POST['message'];
$query="insert into contactus values('$email', '$message')";
$rs=pg_query($conn,$query);
if($rs!=null)
{
echo "<font size='20pt'>Data inserted sucessfully</font>";
echo "<script>alert('Your Message Saved sucessfully');
  	location.href='day.html'</script>";
}
else
echo "<font size='20pt'>error</font>";
}
pg_close($conn);
?>
