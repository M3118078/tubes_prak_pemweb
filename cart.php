<link rel="stylesheet" type="text/css" href="styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">

<?php
session_start();
require('database.php');
print_r($_SESSION['keranjang']);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>keranjang</title>
    </head>
    <body>
        <table>
            <tr>
                <th>No</th>
                <th>produk</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>subharga</th>
            </tr>
            <?php 
            $nomor=1;
            ?>
            <?php 
            foreach ($_SESSION["keranjang"]as $id_produk=>$jumlah);?>
            <?php 

            $ambil = "SELECT * FROM produk WHERE id_produk='$id_produk'";
            $hasilqueryinput = mysqli_query($koneksi1,$ambil);
            $jumlah = mysqli_num_rows($hasilselect);

            //            $pecah = $ambil->fetch_assoc();
//            $queryselect = "select * from user where username='$username' and password='$password'";
//$hasilselect = mysqli_query($koneksi1,$queryselect);

            $subharga = $pecah["harga_produk"]*$jumlah;

            ?>

            <tr>
                <td><?php echo $nomor;   ?></td>
                <td><?php echo $pecah["nama_prouk"];   ?></td>
                <td>Rp <?php echo number_format($pecah["harga_produk"]);   ?></td>
                <td><?php echo $jumlah;   ?></td>
                <td>Rp <?php echo number_format($subharga);   ?></td>
            </tr>
            
            $nomor++;
            endforeach;
            ?>
        </table>
    </body>
</html>