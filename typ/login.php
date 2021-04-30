<?php include('server.php') ?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="login.css">
<body>
    <div class="loginbox">
<!--    <img src="img/avatar.png" class="avatar">-->
        <h1>Login Here</h1>
        <form action="login.php" method="POST">
<?php include('error.php') ?>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="login_user" value="Login">
            <a href="cp.php">Lost your password?</a><br>
            <a href="register.php">Don't have an account?</a><br>
            <a href="day.html">Go To Home Page</a>
        </form>

    </div>

</body>
</head>
</html>
