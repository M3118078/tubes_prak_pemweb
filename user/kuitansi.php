<?php
require('database.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>keranjang</title>
        <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
.td1{
 
    text-align: right;
}
</style>
    </head>
    <body>
        <center>
        <h1> kuitansi</h1>
        <table >
            <tr>
                <th>No</th>
                <th>produk</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>subharga</th> 
            </tr>
            <?php 
            $nomor=1;
            $total=0;
            ?>
            <?php 
                foreach ($_SESSION["cart"]as $id_barang=>$jumlah):
            ?>
            
            <?php 
                $ambil = "SELECT * FROM tambahitem WHERE id_barang='$id_barang'";
                $hasilqueryselect = mysqli_query($koneksi1,$ambil);
                $pecah = mysqli_fetch_assoc($hasilqueryselect); 
                $subharga = $pecah["harga_barang"]*$jumlah;
                $total= $total+$subharga;
            ?>
            
            <tr>
                <td><?php echo $nomor;   ?></td>
                <td><?php echo $pecah["nama_barang"];   ?></td>
                <td>Rp <?php echo number_format($pecah["harga_barang"]);   ?></td>
                <td><?php echo $jumlah;   ?></td>
                <td>Rp <?php echo number_format($subharga);   ?></td>    
            </tr>
            <?php
            $nomor++;
            endforeach;
            
            ?>
            <tr>
                
                <td class="td1" colspan="5" >Total Harga: Rp <?php echo number_format($total);   ?></td>
            </tr>
            
        </table>
        <?php 
              echo "<h3><center><a href='index.php?target=home'>Kembali ke home</a></center></h3></p>"; 
          
        ?>
        </center>
    </body>
</html>