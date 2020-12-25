<?php
session_start();
$_SESSION['userGet']="detail";

header('Location: ../index.php?target=dashboard_user');
?>