<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="adtype.php" method="POST">
<label for="type">Enter Admission Type</label><input type="textbox" name="type"><br><br>
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
$type=$_POST['type'];
$query="select * from admission where admission_type='$type'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='20pt'>Sryyy!!! There is no admission ...or Please Enter Valid Type</font>";
}
else if($r!=null)
{
echo "<center><font size='20pt'>Admission Details</font>";
echo "<center><table border=1><tr><td>Ad_id</td><td>Ad_type</td><td>Ad_date</td><td>Ad_fees</td><td>Ad_duration</td><td>Parent_Id</td><td>Children_id</td></tr>";
while($row=pg_fetch_row($r))
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
pg_close($conn);
?>


