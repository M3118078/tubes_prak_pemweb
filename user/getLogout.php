<?php
session_start();
session_unset();
$_SESSION['log']="user";
header('Location: ../index.php');
?>