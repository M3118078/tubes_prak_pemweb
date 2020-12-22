<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
    
  }
?>
<?php
     
     extract($_POST);       
     require('database.php'); 
     if (isset($push)){
         //lokasi 
         $folder='tambahitem/'; 
         //ambilimage
         $uploadfile1=$_FILES['image_barang_1']['name'];
         $uploadfile2=$_FILES['image_barang_2']['name'];
         $uploadfile3=$_FILES['image_barang_3']['name'];
         //pindahfile
         $dahpindah1 = move_uploaded_file($_FILES['image_barang_1']['tmp_name'], $folder.$uploadfile1);
         $dahpindah2 = move_uploaded_file($_FILES['image_barang_2']['tmp_name'], $folder.$uploadfile2);
         $dahpindah3 = move_uploaded_file($_FILES['image_barang_3']['tmp_name'], $folder.$uploadfile3);
 
                 $queryinput = "INSERT INTO tambahitem (`id_barang`, `nama_barang`, `jenis_barang`, `harga_barang`, `stock`, `image_barang_1`, `image_barang_2`, `image_barang_3`, `desc_barang`, `kata_kunci`) 
                 VALUES ('$id_barang', '$nama_barang', '$jenis_barang', '$harga_barang', '$stock', '$uploadfile1', '$uploadfile2', '$uploadfile3', '$desc_barang', '$kata_kunci')";
              $hasilqueryinput = mysqli_query($koneksi1,$queryinput);
              if($hasilqueryinput==1){
                  echo "Input Berhasil </br>";
              }else {
                  echo "Input Gagal</br>";
              }echo "
             <a href='index.php?target=produk_admin'><button type='button' class='btn btn-primary text-white'>Data Item Masuk</button></a>";
              
              
             }
     
 

?>