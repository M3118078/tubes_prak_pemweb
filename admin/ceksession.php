<?php
    if($_SESSION['status']!="login"){
        session_start();
        header("location:../index.php?target=login");
      }
    echo "username admin session  : ".$_SESSION['username_admin']."</br>";
    if (!isset($_SESSION['username_admin']))
       

    //exit
    header('Location :../../login.php')
?>