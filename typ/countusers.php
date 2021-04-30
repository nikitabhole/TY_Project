<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<input type="button" onclick="location.href='admin.php';" value="Go Back" name="goback">
</form>
</body>
</html>
</html>
<?php
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("unable to connect");
$query="select count(userid) from users";
$rs=pg_query($conn,$query);
if($rs!=null)
{


echo "<center><table border=1><tr><td>Total Number of users are</td>";
while($row=pg_fetch_row($rs))
{
echo "<tr><th>".$row[0]."</th>";

}
}
else
echo "Record not found";
pg_close($conn);
?>
