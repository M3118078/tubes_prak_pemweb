<?php 
 session_start();
  if($_SESSION['status']!="login"){
    
    header("location:../index.php?target=login");
  }
  ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="file/bootstrap/css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="file/fontawesome/css/all.min.css">
  <!--load all styles -->
  <title>index</title>
</head>

 


<body>
  <!--NAVBAR -->

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ml-5 mr-5 pl-5" id="mainNav">
      <div class="container">

        <a class="navbar-brand" href='index.php?target=home'> <b>FVNTECH </b> || <b>SELAMAT DATANG ADMIN</b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto ">

            <form class="d-flex">
              <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search"> &nbsp;
              <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
            <div class="icon ml-4 mt-2 ">
              <h5>
                <a href=""><i class="fas fa-envelope-square mr-3 " data-toggle="tooltip" title="Pesan Masuk"></i></a>
                <a href=""><i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i></a>
                <a href="index.php?target=ceksession"><i class="fas fa-history mr-3"data-toggle="tooltip" title="History"></i></a>
                <a href="logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></a>
               
              </h5>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    </br>
    <!--Akhir Nav-->

    <!--Side Bar -->
    <div class="row no-gutters mt-3 pt-5 pl-5">
      <div class="col-md-2 ml-5 mr-5 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-4 ">
          <li class="nav-item mb-2">
            <a class="nav-link  text-white" href="index.php?target=admin"><i class="fas fa-user mr-3 fa-2x"></i> <b> Admin</b></a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php?target=dashboard_admin"><i
                class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="index.php?target=user_admin"><i class="far fa-user mr-3"></i> Daftar
              User</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="index.php?target=kategori_admin"><i class="fas fa-tag mr-3"></i>
              Kategori</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="index.php?target=produk_admin"><i
                class="fas fa-shopping-basket mr-3"></i>Produk</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" href="index.php?target=terjual_admin"><i
                class="fas fa-shopping-cart mr-3"></i>Terjual</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>

      <div class="co-md-8 ml-3 mt-3">
        
<!--coding edit-->
<?php
              $target= $_GET['target'];
              $koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
              $queryinput="select * from tambahitem where id_barang='$target'";
              $hasilqueryinput = mysqli_query($koneksi1,$queryinput); 
              $row = mysqli_fetch_array($hasilqueryinput);
              ?>

    <!-- Akhir Codingan edit-->
<style>
    .row{
       padding-left:300px  ; 
    }
</style>
<h3><i class="fas fa-keyboard mr-3"></i>Edit Item</h3><hr>
<div class="row" >
<form enctype="multipart/form-data" method="post" action="terimatambahitem.php" >
          <div class="form-group">
            <label for="">Id Barang:</label>
            <?php echo '<input type="text" class="form-control"  name="id_barang" placeholder="Masukkan Id" value="'.$row['id_barang'].'" disabled>'?>
            <?php echo '<input type="hidden" class="form-control"  name="id_barang" placeholder="Masukkan Id" value="'.$row['id_barang'].'" >'?>
          </div>
          <div class="form-group">
            <label for="">Nama Barang:</label>
            <?php echo '<input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama" value="'.$row['nama_barang'].'">' ?>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori Barang</label>
            <select class="form-control" id="exampleFormControlSelect1" name='jenis_barang'>
            <?php
              //$koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
              $queryinput="select * from jenis_barang";
              $hasilqueryinput = mysqli_query($koneksi1,$queryinput);
           
              while ($row2 = mysqli_fetch_array($hasilqueryinput))
              {
                if ($row2['id_jenis']==$row['jenis_barang']){
                    $cetak="selected";
                }else{
                    $cetak="";
                }
                echo "<option value='".$row2['id_jenis']."'$cetak>".$row2['jenis_barang']."</option>";
              }
              
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Harga Barang:</label>
            <?php echo '<input type="text" class="form-control" name="harga_barang" placeholder="Masukkan Harga" value="'.$row['harga_barang'].'">'?>
          </div>
          <div class="form-group">
            <label for="">Stock:</label>
            <?php echo' <input type="text" class="form-control" name="stock" placeholder="-" value="'.$row['stock'].'">'?>
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan File 1</label>
            <?php echo '<input type="file" class="form-control-file" accept="image/*" name="image_barang_1" value="'.$row['image_barang_1'].'"
              id="">' ?>
                <?php echo '<input type="hidden" class="form-control-file" accept="image/*" name="image_barang_1" value="'.$row['image_barang_1'].'"
              id="">' ?>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan File 2</label>
            <?php echo '<input type="file" class="form-control-file" accept="image/*" name="image_barang_2" value="'.$row['image_barang_2'].'"
              id="">' ?>
                <?php echo '<input type="hidden" class="form-control-file" accept="image/*" name="image_barang_2" value="'.$row['image_barang_2'].'"
              id="">' ?>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan File 3</label>
            <?php echo '<input type="file" class="form-control-file" accept="image/*" name="image_barang_3" value="'.$row['image_barang_3'].'"
              id="">' ?>
                <?php echo '<input type="hidden" class="form-control-file" accept="image/*" name="image_barang_3" value="'.$row['image_barang_3'].'"
              id="">' ?>
          </div>
          <div class="form-group">
            <label for="">Deskripsi Barang</label>
            <?php echo '<input type="text-area" class="form-control" name="desc_barang" placeholder="Masukkan Harga" value="'.$row['desc_barang'].'">'?>
          </div>
          <div class="form-group">
            <label for="">Kata Kunci (pencarian)</label>
            <?php echo '<input type="text" class="form-control" name="kata_kunci" placeholder="Masukkan Harga" value="'.$row['kata_kunci'].'">'?>
          </div>

          <input class="btn btn-info" type="submit" name="push" value="Tambahkan">

        </form>
</div>


     
  

     

      </div>



    </div>
    <!-- Akhir Side Bar -->


    <!--coding modulatiras-->

    <!-- Akhir Codingan-->
    </br>
    </br>
    <!-- About -->



    <!-- Akhir About-->





    </br>
    </br>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

      <div class="p-2 mb-2 bg-info text-white">
        <div class="container">

          <!-- Grid row-->
          <div class="row py-3 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
              <h6 class="mb-0">Get connected with us on social networks!</h6>
            </div>
            <a href='index.php?target=tambahitem' class="btn btn-light btn-md active" role="button"
              aria-pressed="true">Tambahkan Item</a>
            <!-- Grid column -->


            <!-- Grid column -->

          </div>
          <!-- Grid row-->

        </div>
      </div>



      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!--Akhir Footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript" src="file/bootstrap/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="admin.js">
    </script>
    <script defer src="/your-path-to-fontawesome/js/all.js"></script>
    <!--load all styles -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

</html>