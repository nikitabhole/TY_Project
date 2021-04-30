<?php
//$url='127.0.0.1:3306';
//$username='root';
//$password='';
$conn=pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root");
if(!$conn){
 die('Could not Connect My Sql:' .pg_error());
}
?>

