<?php
session_start();
//require('../header.php');

require('../database.php');
$target = $_GET['target'];

if(isset($_SESSION['cart'][$target])){
  $_SESSION['cart'][$target]+=1;
}

else{
  $_SESSION['cart'][$target]=1;

}
header("location:../user/cart.php");
?>