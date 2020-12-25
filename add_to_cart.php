<link rel="stylesheet" type="text/css" href="styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<?php
session_start();

$target = $_GET['target'];

if(isset($_SESSION['target'][$target])){
  $_SESSION['target'][$target]+=1;
}

else{
  $_SESSION['keranjang'][$id_produk]=1;
}


?>