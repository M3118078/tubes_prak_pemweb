<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
    
  }
  require('database.php');
    $queryselect ="select * from tambahitem";
    $hasilselect = mysqli_query($koneksi1,$queryselect);
    $jumlah=mysqli_num_rows($hasilselect);
?>
<?php 
$koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
$queryselect ="select * from user";
$hasilselect = mysqli_query($koneksi1,$queryselect);
$jumlah_user=mysqli_num_rows($hasilselect);

?>
<style>
  .display-4 {
    font-weight: bold;
  }

  .card-body-icon {
    position: absolute;
    z-index: 0;
    top: 25px;
    right: 4px;
    opacity: 0.4;
    font-size: 90px;
  }
</style>
<h3><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</h3>
<hr>
<div class="row ">
  <div class="card bg-info ml-4 mr-5" style="width: 18rem;">
    <div class="card-body-icon ">
      <i class="far fa-user mr-3 icon-white"></i></div>
    <div class="card-body">
      <h5 class="card-title text-white"><b>Data User</b></h5>
      <div class="display-4 text-white ml-3"><?php echo "$jumlah_user"?></div>
      <a href="">
        <p class="card-text text-white">Lihat Lanjut ... <i class="fas fa-angle-double-right ml-2"></i></p>
      </a>
    </div>
  </div>

  <div class="card bg-warning ml-4 mr-5" style="width: 18rem;">
    <div class="card-body-icon ">
      <i class="fas fa-tag  mr-3 icon-white"></i></div>
    <div class="card-body">
      <h5 class="card-title text-white"><b>Kategori</b></h5>
      <div class="display-4 text-white ml-3">6</div>
      <a href="">
        <p class="card-text text-white">Lihat Lanjut ... <i class="fas fa-angle-double-right ml-2"></i></p>
      </a>
    </div>
  </div>

  <div class="card bg-danger ml-4" style="width: 18rem;">
    <div class="card-body-icon ">
      <i class="fas fa-shopping-basket mr-3 icon-white"></i></div>
    <div class="card-body">
      <h5 class="card-title text-white"><b>Produk</b></h5>
      <div class="display-4 text-white ml-3"><?php echo "$jumlah"?></div>
      <a href="">
        <p class="card-text text-white">Lihat Lanjut ... <i class="fas fa-angle-double-right ml-2"></i></p>
      </a>
    </div>
  </div>

</div>