<?php 
// mengaktifkan session
session_start();
 
// menghapus semua session
session_destroy();
$_SESSION['log']="user";
 
// mengalihkan halaman sambil mengirim pesan logout
header("location: ../index.php?target=home");
?>