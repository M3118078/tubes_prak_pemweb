<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
    $id_barang=$_POST['id_barang'];
    $nama_barang =$_POST['nama_barang'];
    $stock = $_POST['stock'];
    $jenis_barang= $_POST['jenis_barang'];
    $harga_barang =$_POST['harga_barang'];
    $desc_barang=$_POST['desc_barang'];
    $kata_kunci=$_POST['kata_kunci'];
  }
?>

<style>
    .row{
       padding-left:300px  ; 
    }
</style>
<h3><i class="fas fa-keyboard mr-3"></i>Tambah Item</h3><hr>
<div class="row" >
<form enctype="multipart/form-data" method="post" action="index.php?target=hitungtambahitem" >
          <div class="form-group">
            <label for="">Id Barang:</label>
            <input type="text" class="form-control" name="id_barang" placeholder="Masukkan Id">
          </div>
          <div class="form-group">
            <label for="">Nama Barang:</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori Barang</label>
            <select class="form-control" id="exampleFormControlSelect1" name='jenis_barang'>
            <?php
              $koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
              $queryinput="select * from jenis_barang";
              $hasilqueryinput = mysqli_query($koneksi1,$queryinput);
           
              while ($row = mysqli_fetch_array($hasilqueryinput)){

                echo '<option value ="'.$row['id_jenis'].'">'.$row['jenis_barang'].'</option>';
              }
              
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Harga Barang:</label>
            <input type="text" class="form-control" name="harga_barang" placeholder="Masukkan Harga">
          </div>
          <div class="form-group">
            <label for="">stock:</label>
            <input type="text" class="form-control" name="stock" placeholder="Masukkan Email">
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan File 1</label>
            <input type="file" class="form-control-file" accept="image/*" name="image_barang_1" value="40000"
              id="exampleFormControlFile1">
              <p>Maksimal file 115x115px</p>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan File 2</label>
            <input type="file" class="form-control-file" accept="image/*" name="image_barang_2" value="40000"
              id="exampleFormControlFile1">
              <p>Maksimal file 115x115px</p>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Masukkan File 3</label>
            <input type="file" class="form-control-file" accept="image/*" name="image_barang_3" value="40000"
              id="exampleFormControlFile1">
              <p>Maksimal file 115x115px</p>
          </div>
          <div class="form-group">
            <label for="">Deskripsi Barang :</label>
            <input type="text-area" class="form-control" name="desc_barang" placeholder="Deskripsi Barang">
          </div>
          <div class="form-group">
            <label for="">Kata Kunci (pencarian)</label>
            <input type="text" class="form-control" name="kata_kunci" placeholder="Masukkan kata kunci">
          </div>
          <input class="btn btn-info" type="submit" name="push" value="Tambahkan">


        </form>



</div>
