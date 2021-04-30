<?php
session_start();
$username=$_POST['username'];
$new=$_POST['newPassword'];

$conn = pg_connect("host=localhost port=5432 dbname=tydb user=nikita password=root") or die("Connection Error: " . pg_error($conn));

if (count($_POST) > 0) {
    $result = pg_query($conn, "SELECT * from users WHERE username='$username'");
    $row = pg_fetch_array($result);
    if ($username == $row["username"]) 
{
        pg_query($conn, "UPDATE users set password='$new' WHERE username='$username'");
        $message = "Password Changed";
    } else
        $message = "username is not correct";
}
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<script>
function validatePassword() {
var username,newPassword,confirmPassword,output = true;

username = document.frmChange.username;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!username.value) {
	username.focus();
	document.getElementById("username").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body>
    <form name="frmChange" method="post" action="cp.php"
        onSubmit="return validatePassword()">

        <div class="cp">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
<center><h1>Forgot Password</h1></center>
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>username</label></td>
                    <td width="60%"><input type="text"
                        name="username" class="txtField" /><span
                        id="username" class="required"></span></td>
                </tr>
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required"></span></td>
                </tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword"
                    class="txtField" /><span id="confirmPassword"
                    class="required"></span></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit">
<a href="login.php">Go To Login</td> 
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
