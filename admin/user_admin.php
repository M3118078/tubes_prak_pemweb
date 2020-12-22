<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
  }
?>
<?php 
$koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
$queryselect ="select * from user";
$hasilselect = mysqli_query($koneksi1,$queryselect);
$jumlah=mysqli_num_rows($hasilselect);

?>
<h3><i class="far fa-user mr-3"></i>Daftar User</h3><hr>

<h5 class="mt-4 mb-3"><b>Jumlah Item Barang : <?php echo "$jumlah"?></b></h5>

<table class="table">

  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Email</th>
      <th scope="col">Update|Dalete</th>
     

    </tr>
  </thead>
<?php
   // require('database.php'); kalau pakai require ga bisa konek(error) database masih dicari alasan kok ga bisa konek
    
   
    if($jumlah){
        while ($row =mysqli_fetch_array($hasilselect)){
          echo"<tbody>",
          "<tr>",
           "<th scope='row'>".$row['username']."</th>",
           "<td>".$row['password']."</td>",
           "<td>".$row['nama_lengkap']."</td>",
           "<td>".$row['email']."</td>",
           "<td><a href='edititem.php?target=".$row['']."'> <b> edit </b>  </a> </br> 
            <a href='hapustambahitem.php?target=".$row['']."'> <b> hapus </b>  </a></td>",
            "</tr>",
            "</tbody>";
        }
        }
        ?>
       
</table>


