<?php
    session_start();
     
    // Is the user logged in?
    if(!isset($_SESSION['userID']) || !isset($_SESSION['email'])){
        header('Location: /login.php');
    }
     
    // Did the user submit the form?
    if(!empty($_POST)){
        // Process the form
         
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
         
        $check_current_password = trim($current_password);
        $check_new_password = trim($new_password);
         
        if($check_current_password != '' && $check_new_password != ''){
            // Continue the process
             
            // What's the address of your database?
            $database_host = 'localhost';
             
            // What's the username to connect?
            $database_user = 'root';
             
            // What's the password for that user?
            $database_password = 'password';
             
            // What's the name of the database?
            $database = 'social';
             
            // User the MySQLi class to connect to database
            $mysqli = new mysqli($database_host, $database_user, $database_password, $database);
             
            $current_password = $mysqli->real_escape_string($current_password);
            $new_password = $mysqli->real_escape_string($new_password);
             
            $sql = "SELECT password, salt FROM users WHERE userID='" . $_SESSION['userID'] . "'";
            $query = $mysqli->query($sql);
             
            $pass = $query->fetch_assoc();
             
            $salt = $pass['salt'];
             
            // Does their $current_password, while encrypted, match their database password?
            $encrypt_current_password = sha1($current_password . $salt);
             
            if($encrypt_current_password == $pass['password']){
                $new_salt = time();
                 
                $encrypt_new_password = sha1($new_password . $new_salt);
                 
                $sql = "UPDATE users SET password='" . $encrypt_new_password . "', salt=" . $new_salt . " WHERE userID=" . $_SESSION['userID'];
                $query = $mysqli->query($sql);
                 
                $error = 'Successfully updated your password.';
            }
            else {
                $error = 'Incorrect information. Please try again.';
            }
             
             
             
            // Always close the database connection
            $mysqli->close();
        }
        else {
            $error = 'Please provide both your current password and your new password.';
        }
    }
?>
 
<html>
    <head>
        <title>Change password</title>
    </head>
     
    <body>
         
        <h1>Change password</h1>
         
        <?php if(isset($error)): ?>
            <h2><?php echo $error; ?></h2>
        <?php endif; ?>
         
        <form action="" method="post">
         
            <p>
                <label for="current_password">Your current password</label>
                <br/>
                <input type="password" name="current_password" id="current_password" />
            </p>
             
            <p>
                <label for="new_password">Your new_password</label>
                <br/>
                <input type="password" name="new_password" id="new_password" />
            </p>
             
            <p>
                <button type="submit">Change password</button>
            </p>
             
        </form>
         
    </body>
</html>

