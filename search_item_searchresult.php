<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">
<?php
require('database.php');
extract($_POST);
$cari = $_POST['cari'];
$data = "select * from tambahitem where nama_barang like '%".$cari."%'";                  
$hasilselect = mysqli_query($koneksi1,$data);
$jumlah = mysqli_num_rows($hasilselect);
if ($jumlah!=0){  
    while ($row = mysqli_fetch_array($hasilselect)){
    //<!-- Product Item -->
    echo   "<card class='product_item is_new col-3'>
                <div class='product_border'></div>
                <div class='product_image d-flex flex-column align-items-center justify-content-center'><img src='images/".$row['image_barang_1']."' alt=''></div>
                <div class='product_content'>
                    <div class='product_price'>Rp.".number_format($row['harga_barang'])."</div>
                    <div class='product_name'><div><a href='getInfoProduct.php?product=".$row['id_barang']."' tabindex='0'>".$row['nama_barang']."</a></div></div>
                </div>
                <div class='product_fav'><i class='fas fa-heart'></i></div>
                <ul class='product_marks'>
                    <li class='product_mark product_discount'></li>
                    <li class='product_mark product_new'>new</li>
                </ul>
            </card>";
            
    }
} else { echo " 
                <div class = 'container'>
                </br>
                </br>
                <center>
                    <h3> 'Data Tidak Ditemukan' </h3>
                    
                    <p style='color: blue;'>silahkan masukan kata kunci lain</p>
                </center>
                </div>";
                }
?>