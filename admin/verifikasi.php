<?php
session_start();
$koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
       
    $username_admin = $_POST['username_admin'];
    $password_admin = $_POST['password_admin'];  
    $queryinput ="select*from admin where username_admin='$username_admin' and password_admin ='$password_admin' ";
    $hasilqueryinput = mysqli_query($koneksi1, $queryinput);
    $jumlah= mysqli_num_rows($hasilqueryinput);
    echo "Jumlah Data  : $jumlah </br>";
 

   
if ($jumlah>0){
$_SESSION['username_admin']=$username_admin;
$_SESSION['status']="login";
header("location:index.php?target=dashboard_admin");
}else {
	header("location:../index.php?target=home");}


?>