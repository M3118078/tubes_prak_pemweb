
<?php
session_start();
if($_SESSION['status']!="login"){
  
  header("location:../index.php?target=login");
}

    extract($_POST);
  // require('database.php'); kalau pakai require ga bisa konek database masih dicari alasan kok ga bisa konek
    $id_barang=$id_barang;
    $nama_barang =$nama_barang;
    $stock = $stock;
    $jenis_barang= $jenis_barang;
    $harga_barang =$harga_barang;
    $desc_barang=$desc_barang;
   // $userfile=$userfile;
    echo "$id_barang</br>";
    echo "$nama_barang</br>";
    echo "$stock</br>";
    echo "$jenis_barang</br>";
    echo "$harga_barang</br>";
    echo "$desc_barang</br>";
   // echo "$userfile</br>";
    error_reporting(0);
    
    $koneksi1 = mysqli_connect('localhost','root','','dbfvntech');
    echo "</br>";
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
        

             $queryinput ="UPDATE `tambahitem` SET `nama_barang` = '$nama_barang', `jenis_barang` = '$jenis_barang', `harga_barang` = '$harga_barang', `stock` = ' $stock', `image_barang_1` = '$image_barang_1', `image_barang_2` = '$image_barang_2', `image_barang_3` = '$image_barang_3', `desc_barang` = '$desc_barang' WHERE `tambahitem`.`id_barang` = '$id_barang';";
             $hasilqueryinput = mysqli_query($koneksi1,$queryinput);
             if($hasilqueryinput=1){
                 echo "Edit Berhasil </br>";
             }else {
                 echo "Edit Gagal</br>";
             }echo "<p><a href='index.php?target=produk_admin'>Data Item Masuk</a></p>";
             
            }
            
    ?>
  