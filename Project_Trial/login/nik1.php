    <?php
    session_start ();
    $user = =$_SESSION['user_id'];
    if ($user)
    {
    //user is logged in
    if ($_POST['login'])
    {
    //check fields
    $oldpassword =$_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $repeatnewpassword =$_POST['repeatnewpassword'];
    //check password against db
    //connect to db
    $connect = pg_connect ("host=localhost port=5432 dbname=tydb user=nikita password=root") or die();
    $queryget = pg_query($connect,"select pass from signup WHERE user_id='$user'")or die ("Query didnt work")
    $row = pg_fetch_assoc($queryget);
    $oldpassworddb = $row['pass'];
    //check passwords
    if($oldpassword==$oldpassworddb)
    {
    //check the new password
    if ($newpassword==$repeatnewpassword)
    {
    //succes
    //change password in db
    $querychange = pg_query("update signup pass='$newpassword' where user_id='$user'
    ");
    session_destroy();
    die ("Your password has been changed.<a href='login.php'>Return </a>to the main page");
    }
    else 
     die ("New password dont match!");
    }
    else 
     die("Old password doesnt match!");
    }
    else
    {
    echo("
    <form action ='nik1.php' method='POST'>
     Old password: <input type ='text' name ='oldpassword'><p>
     New password: <input type='password' name='newpassword'><br>
     Repeat new password <input type='password' name='repeatnewpassword'><p>
     <input type='submit' name='submit' value='Change password'>
    </form>
    ");
    }
    }
    else
       die ("You must be logged in to change your password");
    ?>
