<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "2017_data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['q'];
$sql = "select book_title from book_table where book_title like '%".$id."%' limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["book_title"]. "\n";
 }
} else {
 echo "0 results";
}
$conn->close();
?>
