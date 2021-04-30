<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="deleteevent.php" method="POST">
<label for="event">Enter event name to delete </label><input type="textbox" name="deleteevent"><br><br>
<input type="submit" name="submit" value="Submit">
<input type="button" onclick="location.href='grid.html';" value="Go Back" name="goback">
</form>
</body>
</html>
</html>
<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
if(isset($_POST['submit']))
{
$deleteevent=$_POST['deleteevent'];
$query="select * from event where ename='$deleteevent'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='10px'>Sryyy!!! There is no event name present...Please Enter Valid Event name</font>";
}
else
{
$q2="delete from event where ename='$deleteevent'";
$r1=pg_query($conn,$q2);
$q3="select * from event"; 
$r2=pg_query($conn,$q3);
if($r2!=null)
{
echo "<center><font size='20pt'>Event Details</font>";
echo "<center><table border=2><tr><td>Event no</td><td>Host name</td><td>Event name</td><td>Event Date</td><td><Time from</td><td>Time to</td><td>Venue</td><td>Managed for</td></tr>";
while($row=pg_fetch_row($r2))
{
echo "<tr><th>".$row[0]."</th>";
echo "<th>".$row[1]."</th>";
echo "<th>".$row[2]."</th>";
echo "<th>".$row[3]."</th>";
echo "<th>".$row[4]."</th>";
echo "<th>".$row[5]."</th>";
echo "<th>".$row[6]."</th>";
echo "<th>".$row[7]."</th>";
}
}
}
}
pg_close($conn);
?>


