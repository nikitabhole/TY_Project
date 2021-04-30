<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="betweenex.php" method="POST">
<label for="event">Exhibition Managed During</label><input type="date" name="fromdate"> To <input type="date" name="todate"> <br><br>
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
$query="select * from exhibition where date between '$from' and '$to'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='10px'>Sryyy!!! There is no event in the given period...plzz enter valid date</font>";
}
else
{
$q2="select * from exhibition where date between '$from' and '$to'";
$r1=pg_query($conn,$q2);
if($r1!=null)
{
echo "<center><Font size=20pt>Exhibition Details</font></center>";
echo "<center><table border=1><tr><td>Exhibition no</td><td>Exhibition name</td><td>Exhibition Venue</td><td>Exhibition date</td><td>Time from</td><td>Time to</td><td>No of days</td><td>Product Name</td><td>Description</td></tr>";
while($row=pg_fetch_row($rs))
{
echo "<tr><th>".$row[0]."</th>";
echo "<th>".$row[1]."</th>";
echo "<th>".$row[2]."</th>";
echo "<th>".$row[3]."</th>";
echo "<th>".$row[4]."</th>";
echo "<th>".$row[5]."</th>";
echo "<th>".$row[6]."</th>";
echo "<th>".$row[7]."</th>";
echo "<th>".$row[8]."</th>";
}
}
}
}
pg_close($conn);
?>


