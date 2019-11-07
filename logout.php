<?php

session_start();
if(!empty($_SESSION['username'])){
    //$message="logged out.";
   // echo $message;
    session_unset();
    session_destroy();
    header("location: main.html");
    echo '<script language="javascript">';
        echo 'alert("Logged out")';
    echo '</script>';
}
?>