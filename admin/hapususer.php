<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
  }
?>
<?php
    extract($_POST);
   //  require('database.php');// kalau pakai require ga bisa konek database masih dicari alasan kok ga bisa konek
     $koneksi1 = mysqli_connect('localhost','root','','dbfvntech'); 
       $username= $_GET['target'];
       echo $username;
        $query = 'DELETE FROM user WHERE username="'.$username.'"';
        mysqli_query($koneksi1,$query);
      if($query){
          echo"
          <script> alert('Data Berhasil Dihapus!');
         document.location.href='database.php ');
         </script>";
      }  else{
         echo"
         <script> alert('Data Gagal Dihapus!');
         document.location.href='database.php ');
        </script>";
      }
      header("location:index.php?target=user_admin");
?>
  