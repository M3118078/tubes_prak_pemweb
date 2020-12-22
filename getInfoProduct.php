<?php
require('database.php');
session_start();
if(isset($_GET['product'])){
    $_SESSION['id_barang']=$_GET['product'];}
header('Location: index.php?target=products');
?>