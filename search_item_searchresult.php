<?php
require('database.php');
$queryselect = "select * from tambahitem";                            
$hasilselect = mysqli_query($koneksi1,$queryselect);
$jumlah = mysqli_num_rows($hasilselect);
if ($jumlah){
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
}
?>