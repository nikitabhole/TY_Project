<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<input type="button" onclick="location.href='afterloginex.html';" value="Go Back" name="goback">
</form>
</body>
</html>
</html>

<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
$query="select exhibition.*,pname,description from exhibition,product,ex_pro where exhibition.exno=ex_pro.exno and product.pno=ex_pro.pno and date=current_date";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='20pt'>Sryyy!!! There is no Exhibition Todayyyy.......</font>";
}
else if($r!=null)
{
echo "<center><Font size=20pt>Todays Exhibition Details</font></center>";
echo "<center><table border=1><tr><td>Exhibition no</td><td>Exhibition name</td><td>Exhibition Venue</td><td>Exhibition date</td><td>Time from</td><td>Time to</td><td>No of days</td><td>Product Name</td><td>Description</td></tr>";
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
echo "<th>".$row[8]."</th>";
}
}
pg_close($conn);
?>


