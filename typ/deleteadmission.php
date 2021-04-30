<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="deleteadmission.php" method="POST">
<label for="event">Enter admission id to delete </label><input type="textbox" name="deletead"><br><br>
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
$deletead=$_POST['deletead'];
$query="select * from admission where adid='$deletead'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='10px'>Sryyy!!! There is no Admission Id present...Please Enter Valid Admission Id</font>";
}
else
{
$q2="delete from admission where adid='$deletead'";
$r1=pg_query($conn,$q2);
$q3="select * from admission"; 
$r2=pg_query($conn,$q3);
if($r2!=null)
{
echo "<center><font size='20pt'>Admission is deleted sucessfully</font>";
echo "<center><font size='20pt'>Admission Details</font>";
echo "<center><table border=1><tr><td>Ad_id</td><td>Ad_type</td><td>Ad_date</td><td>Ad_fees</td><td>Ad_duration</td><td>Parent_Id</td><td>Children_id</td></tr>";
while($row=pg_fetch_row($r2))
{
echo "<tr><th>".$row[0]."</th>";
echo "<th>".$row[1]."</th>";
echo "<th>".$row[2]."</th>";
echo "<th>".$row[3]."</th>";
echo "<th>".$row[4]."</th>";
echo "<th>".$row[5]."</th>";
echo "<th>".$row[6]."</th></tr>";
}
}
}
}
pg_close($conn);
?>


