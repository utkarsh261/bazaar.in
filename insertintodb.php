<?php
if(!isset($_SESSION)) { 
    session_start(); 
} 

if(isset($_POST['email'])){
    include 'mysqlconnect.php';   
    $username = $_POST['username'];
    $first = $_POST['First'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //DDOS protection
    $username = stripslashes($username);
    $password = stripslashes($password);

    $query="insert into user_information values('$username','$first','$last','$email','$password')";
    $registerNew = mysqli_query($conn,$query);
    if($registerNew){
        $message="Successfull Registration, Log in to confirm.";
        echo $message;
           session_unset();
    session_destroy();
        include 'login.php';
    }
    else{
        $message="Username already exists!!.";
        echo $message;
        include 'register.php';
    }
}
?>
