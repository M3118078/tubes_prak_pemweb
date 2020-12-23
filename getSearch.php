<?php
require('database.php');
session_start();
$_SESSION['cari']=$_POST['cari'];

header('Location: index.php?target=result');
?>