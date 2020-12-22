<?php
require('../database.php');
session_start();
$username=$_SESSION['username_user'];
if(isset($_POST['nameEdit'])){
    $nameEdit=$_POST['nameEdit'];
    $updateName="UPDATE user SET nama_lengkap='$nameEdit' where username='$username'";
    mysqli_query($koneksi1,$updateName);
}
if(isset($_POST['birthEdit'])){
    $birthEdit=$_POST['birthEdit'];
    $updateBirth="UPDATE user SET tanggal='$birthEdit' where username='$username'";
    mysqli_query($koneksi1,$updateBirth);
}
if(isset($_POST['genderEdit'])){
    $genderEdit=$_POST['genderEdit'];
    $updateGender="UPDATE user SET gender='$genderEdit' where username='$username'";
    mysqli_query($koneksi1,$updateGender);
}
if(isset($_POST['emailEdit'])){
    $emailEdit=$_POST['emailEdit'];
    $updateEmail="UPDATE user SET email='$emailEdit' where username='$username'";
    mysqli_query($koneksi1,$updateEmail);
}
if(isset($_POST['HPEdit'])){
    $HPEdit=$_POST['HPEdit'];
    $updateHP="UPDATE user SET HP='$HPEdit' where username='$username'";
    mysqli_query($koneksi1,$updateHP);
}
if(isset($_POST['picture'])){
    if($_SESSION['pict']!="user/assets/images/profile-default.png"){
        
        unlink(str_replace('user/','',$_SESSION['pict']));
    }
    $uploaddir="images-profile/";
    $uploadfile=$uploaddir.$_FILES['pictEdit']['name'];
    move_uploaded_file($_FILES['pictEdit']['tmp_name'],$uploadfile);
    $updatePict="UPDATE user SET pict='user/$uploadfile' where username='$username'";
    mysqli_query($koneksi1,$updatePict);
}
if(isset($_POST['passEdit'])){
    $passEdit=$_POST['passEdit'];
    $updatePass="UPDATE user SET password='$passEdit' where username='$username'";
    mysqli_query($koneksi1,$updatePass);
}

header('Location: ../index.php?target=dashboard_user');
?>