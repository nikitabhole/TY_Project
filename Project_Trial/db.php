<?php
$n=$_POST['name'];
$p=$_POST['password'];
$con=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("cannot create::");
$q="insert into login values('$n','$p')";
$r=pg_query($con,$q);
if($r!=null)
{

	echo "$n";
}else
	echo "error";
pg_close($con);

?>
