<?php
session_start();
$_SESSION['log']=$_GET['log'];
header('Location: index.php?target=login');
?>