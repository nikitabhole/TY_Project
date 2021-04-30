<?php 

//$host="localhost";
//$user="nikita";
//$password="root";
//$db="tydb";

$con=("host=localhost post=5432 dbname=tydb user=nikita password=root");

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=pg_query($con,$sql);
    
    if(pg_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
