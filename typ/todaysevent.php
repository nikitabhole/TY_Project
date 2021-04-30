<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="todaysevent.php" method="POST">
<label for="event">Enter Venue </label><input type="textbox" name="venue"><br><br>
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
$venue=$_POST['venue'];
$query="select * from event where venue='$venue' and edate=current_date";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='20pt'>Sryyy!!! There is no event Todayyyy...or Please Enter Valid Venue name</font>";
}
else if($r!=null)
{
echo "<center><font size='20pt'>Todays Event Details</font>";
echo "<center><table border=2><tr><td>Event no</td><td>Host name</td><td>Event name</td><td>Event Date</td><td><Time from</td><td>Time to</td><td>Venue</td><td>Managed for</td></tr>";
while($row=pg_fetch_row($r))
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
pg_close($conn);
?>


