<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="betweendate.php" method="POST">
<label for="event">Events Managed During</label><input type="date" name="fromdate"> To <input type="date" name="todate"> <br><br>
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
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$from=date("m-d-y",strtotime($fromdate));
$to=date("m-d-y",strtotime($todate));
$query="select * from event where edate between '$from' and '$to'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='10px'>Sryyy!!! There is no event in the given period...plzz enter valid date</font>";
}
else
{
$q2="select * from event where edate between '$from' and '$to'";
$r1=pg_query($conn,$q2);
if($r1!=null)
{
echo "<center><font size='20pt'>Event Details</font>";
echo "<center><table border=1><tr><td>Event no</td><td>Host name</td><td>Event name</td><td>Event Date</td><td>Time from</td><td>Time to</td><td>Venue</td><td>Managed for</td></tr>";
while($row=pg_fetch_row($r1))
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


