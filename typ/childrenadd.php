<!DCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<form action="childrenadd.php" method="POST">
<label for="type">Enter Children Address</label><input type="textbox" name="add"><br><br>
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
$add=$_POST['add'];
$query="select * from children where caddress='$add'";
$r=pg_query($conn,$query) or die("problem in query");
$result=pg_num_rows($r);
if($result==0)
{
echo "<font size='20pt'>Sryyy!!! There is no children live at given address...or Please Enter Valid Address</font>";
}
else if($r!=null)
{
echo "<center><font size='20pt'>Children Details</font>";
echo "<center><table border=1><tr><td>children_id</td><td>children_name</td><td>Child_DOB</td><td>Child_age</td><td>Blood_Group</td><td>Address</td><td>Gender</td><td>Disorder</td><td>Doctor Name</td><td>Doctot Mo No</td><td>Parent_Id</td></tr>";
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
echo "<th>".$row[9]."</th>";
echo "<th>".$row[10]."</th></tr>";
}
}
}
pg_close($conn);
?>


