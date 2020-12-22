<?php
require('../database.php');
session_start();

       
    $username_user = $_POST['username_user'];
    $password_user = $_POST['password_user'];  
    $queryinput ="select*from user where username='$username_user' and password ='$password_user' ";
    $hasilqueryinput = mysqli_query($koneksi1, $queryinput);
    $jumlah= mysqli_num_rows($hasilqueryinput); 

   
if ($jumlah>0){
$_SESSION['username_user']=$username_user;
$_SESSION['status']="login";
header("location:../index.php?target=home");
}else {
	header("location:../index.php?target=login");}


?>