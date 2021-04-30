<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="deleteusers.php" method="POST">
<label for="event">Enter username or id to delete </label><input type="textbox" name="deleteuser"><br><br>
<input type="submit" name="submit" value="Submit">
<input type="button" onclick="location.href='admin.php';" value="Go Back" name="goback">
</form>
</body>
</html>
</html>
<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
if(isset($_POST['submit']))
{
$deleteuser=$_POST['deleteuser'];
$query="select * from users where username='$deleteuser' or userid='$deleteuser'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='10px'>Sryyy!!! There is no User name present...Please Enter Valid User name</font>";
}
else
{
$q2="delete from users where username='$deleteuser' or userid='$deleteuser'";
$r1=pg_query($conn,$q2);
$q3="select * from users"; 
$r2=pg_query($conn,$q3);
if($r2!=null)
{
echo "user is deleted sucessfully";
echo "<center><font size='20pt'>User Details</font>";
echo "<center><table border=1><tr><td>User Id</td><td>User name</td><td>Email</td><td>Mobile Number</td><td><Password</td></tr>";
while($row=pg_fetch_row($r2))
{
echo "<tr><th>".$row[0]."</th>";
echo "<th>".$row[1]."</th>";
echo "<th>".$row[2]."</th>";
echo "<th>".$row[3]."</th>";
echo "<th>".$row[4]."</th></tr>";
}
}
}
}
pg_close($conn);
?>


