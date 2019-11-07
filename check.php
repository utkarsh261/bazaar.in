<?php

session_start();

include 'mysqlconnect.php';
$username = $_POST['username'];
$password=$_POST['password'];
$query="select Username,Password from user_information";
$c=mysqli_query($conn,$query);
$f=0;
$pass="";
while ($row=mysqli_fetch_array($c) ) {
    if ($row['Username']==$username){
        # code...$
        $f=1;
        $pass=$row['Password'];
        break;
    }
    # code...
}
if($f==1)
{
    if($pass==$password){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
    	include 'main.php';
    }
    else{
        $message="password doesn't match.";
        echo $message;
        session_unset();
        session_destroy();
        include 'login.php';
    	
    }
    
}
else {
	$message="user doesn't exist.";
	echo $message;
            session_unset();
        session_destroy();
	include 'login.php';
}

  ?>