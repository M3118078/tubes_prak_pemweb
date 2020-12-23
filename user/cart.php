<?php
session_start();
require('../database.php');
//require('../header.php');

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
                <!--th>aksi</th-->
                
            </tr>
            <?php 
            $nomor=1;
            ?>
            <?php 
                foreach ($_SESSION["cart"]as $id_barang=>$jumlah):
            ?>
            
            <?php 
                $ambil = "SELECT * FROM tambahitem WHERE id_barang='$id_barang'";
                $hasilqueryselect = mysqli_query($koneksi1,$ambil);
                $pecah = mysqli_fetch_assoc($hasilqueryselect); 
                $subharga = $pecah["harga_barang"]*$jumlah;
            ?>
            
            <tr>
                <td><?php echo $nomor;   ?></td>
                <td><?php echo $pecah["nama_barang"];   ?></td>
                <td>Rp <?php echo number_format($pecah["harga_barang"]);   ?></td>
                <td><?php echo $jumlah;   ?></td>
                <td>Rp <?php echo number_format($subharga);   ?></td>
                
                <!--td><?php //echo" <a href='hapusmhs.php?target=".$row['nim']."'>hapus</a>" ?></td-->       
            </tr>
            <?php
            $nomor++;
            endforeach;
            ?>
        </table>
        <?php //require('../footer.php');
              echo "<h3><center><a href='../index.php?target=home'>Belanja lagi</a></center></h3></p>"; 
              echo "<h3><center><a href='kuitansi.php'>Cek Out</a></center></h3></p>"; 

        ?>
    </body>
</html>