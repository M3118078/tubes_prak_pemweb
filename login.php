<link rel="stylesheet" type="text/css" href="styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
</br></br>

<div class="row">
  <div class="col peding-50"></div>
  <div class="row col-4">
    <a href="loginLevel.php?log=user" class="col-6" role="button" <?php if($_SESSION['log']=='admin'){echo "style='background-color:ghostwhite; border-bottom:1px solid cadetblue;'";} else echo "''"; ?>><center>User</center></a>
    <a href="loginLevel.php?log=admin" class="col-6" role="button" <?php if($_SESSION['log']=='user'){echo "style='background-color:ghostwhite; border-bottom:1px solid cadetblue;'";} else echo "''";?>><center>Admin</center></a>
  </div>
  <div class="col peding-50"></div>
</div>
<br>
<?php
if(isset($_SESSION['log'])){
  if($_SESSION['log']=="user"){require('login-user.php');} else
  if($_SESSION['log']=="admin"){require('login-admin.php');}
}else {$_SESSION['log']="user"; header('Location: index.php?target=login');}
?>