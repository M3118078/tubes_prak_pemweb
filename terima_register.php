<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>



<body>
<?php

session_start();
require("header.php");
require("menu_nav.php");
$username=$_POST['username'];
$nama_lengkap=$_POST['nama_lengkap'];
$password=$_POST['password'];
$e_mail=$_POST['e_mail'];
$hp=$_POST['hp'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$gender=$_POST['gender'];
/*
echo "$username</br>";
echo "$nama_lengkap</br>";
echo "$password</br>";
echo "$e_mail</br>";
echo "$hp</br>";
echo "$gender</br>";
echo "$tanggal_lahir</br>";
echo "$pict</br>";
*/
require('database.php');
$queryinput = "INSERT INTO user (username, password, nama_lengkap, email, HP, tanggal, gender) 
VALUES ('$username', '$password', '$nama_lengkap', '$e_mail', '$hp', '$tanggal_lahir', '$gender')";
$hasilqueryinput = mysqli_query($koneksi1,$queryinput);
if($hasilqueryinput==1){
    echo "<center><h1> Registrasi Berhasil </h1></center></br>";
}else{
    echo "<center><h1> Registrasi gagal</h1> </center></br>";
}
echo "<h3><center><a href='login.php?target=login'>Sign in</a></center></h3></p>";
require("footer.php"); 
require("js.php"); 
?>
</body>
</html>