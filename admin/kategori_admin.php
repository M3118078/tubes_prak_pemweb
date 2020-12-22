<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
  }
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
<h3><i class="fas fa-tag mr-3"></i>Kategori</h3>
<hr>
<div class="row ">
  <div class="card bg-warning ml-4 mr-5" style="width: 18rem;">
    <div class="card-body-icon ">
      <i class="fas fa-mobile-alt mr-3 icon-white"></i></div>
    <div class="card-body">
      <h5 class="card-title text-white"><b>Handphone</b></h5>
      <div class="display-4 text-white ml-3">6</div>
      <a href="">
        <p class="card-text text-white">Lihat Lanjut ... <i class="fas fa-angle-double-right ml-2"></i></p>
      </a>
    </div>
  </div>

  <div class="card bg-success ml-4 mr-5" style="width: 18rem;">
    <div class="card-body-icon ">
      <i class="fas fa-laptop-code  mr-3 icon-white"></i></div>
    <div class="card-body">
      <h5 class="card-title text-white"><b>Leptop</b></h5>
      <div class="display-4 text-white ml-3">6</div>
      <a href="">
        <p class="card-text text-white">Lihat Lanjut ... <i class="fas fa-angle-double-right ml-2"></i></p>
      </a>
    </div>
  </div>

  <div class="card bg-danger ml-4" style="width: 18rem;">
    <div class="card-body-icon ">
      <i class="fas fa-headphones-alt mr-3 icon-white"></i></div>
    <div class="card-body">
      <h5 class="card-title text-white"><b>Accessories</b></h5>
      <div class="display-4 text-white ml-3">6</div>
      <a href="">
        <p class="card-text text-white">Lihat Lanjut ... <i class="fas fa-angle-double-right ml-2"></i></p>
      </a>
    </div>
  </div>

</div>