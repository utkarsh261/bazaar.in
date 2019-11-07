<?php

session_start();
if(!empty($_SESSION['username'])){
    //$message="logged out.";
   // echo $message;
    session_unset();
    session_destroy();
    echo '<script language="javascript">';
        echo 'alert("Logged out")';
    echo '</script>';
    header("location: main.php");

}
?>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="css/mystyle2.css">   
</head>
    <body>
    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="check.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" autofocus required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot Password?</a>
            <br><br><br>
	        <a href="Register.php">Create New Account</a>
            </form>
        </div>
    
    </body>
</html>
