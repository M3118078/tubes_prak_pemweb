<?php 
$queryselect ="select * from tambahitem";
$hasilselect = mysqli_query($koneksi1,$queryselect);
$jumlah=mysqli_num_rows($hasilselect);



?>

<h3><i class="fas fa-shopping-basket mr-3"></i>Produk</h3><hr>

<h5 class="mt-5 mb-3"><b>Jumlah Item Barang : <?php echo "$jumlah"?></b></h5>

<table class="table">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Categories</th>
      <th scope="col">Price</th>
      <th scope="col">qty</th>
      <th scope="col">Image 1</th>
      <th scope="col">Image 2</th>
      <th scope="col">Image 3</th>
      <th scope="col">Desc</th>
      <th scope="col">Update</th>

    </tr>
  </thead>
<?php
   // require('database.php'); kalau pakai require ga bisa konek(error) database masih dicari alasan kok ga bisa konek
    
   
    if($jumlah){
        while ($row =mysqli_fetch_array($hasilselect)){
          echo"<tbody>",
          "<tr>",
           "<th scope='row'>".$row['id_barang']."</th>",
           "<td>".$row['nama_barang']."</td>",
           "<td>".$row['jenis_barang']."</td>",
           "<td>Rp. ".number_format($row['harga_barang'])."</td>",
           "<td>".$row['stock']."</td>",
           "<td><img src='tambahitem/".$row['image_barang_1']."' width='100' height='100'></td>",
           "<td><img src='tambahitem/".$row['image_barang_2']."' width='100' height='100'></td>",
           "<td><img src='tambahitem/".$row['image_barang_3']."' width='100' height='100'></td>",
           "<td>".$row['desc_barang']."</td>",
           "<td><a href='edititem.php?target=".$row['id_barang']."'> <b> edit </b>  </a> </br> 
            <a href='hapustambahitem.php?target=".$row['id_barang']."'> <b> hapus </b>  </a></td>",
            "</tr>",
            "</tbody>";
        }
        }
        ?>
       
</table>


