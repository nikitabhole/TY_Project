<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<input type="button" onclick="location.href='grid.html';" value="Go Back" name="goback">
</form>
</body>
</html>
</html>
<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
$query="select * from event";
$rs=pg_query($conn,$query);
if($rs!=null)
{
echo "<center><font size='20pt'>Event Details</font>";
echo "<center><table border=1><tr><td>Event no</td><td>Host name</td><td>Event name</td><td>Event Date</td><td>Time from</td><td>Time to</td><td>Venue</td><td>Managed for</td></tr>";
while($row=pg_fetch_row($rs))
{
echo "<tr><th>".$row[0]."</th>";
echo "<th>".$row[1]."</th>";
echo "<th>".$row[2]."</th>";
echo "<th>".$row[3]."</th>";
echo "<th>".$row[4]."</th>";
echo "<th>".$row[5]."</th>";
echo "<th>".$row[6]."</th>";
echo "<th>".$row[7]."</th></tr>";
}
}
else
echo "Record not found";
pg_close($conn);
?>
