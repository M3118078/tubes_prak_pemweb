<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
   <body>
   
	  <?php 
	  session_start();
	  require("header.php");
	  require("menu_nav.php");
      if(isset($_GET['target'])){
		if($_GET['target']=='home'){
			require('home.php');}
		if($_GET['target']=='contact'){
			require('contact.php');}	
		if($_GET['target']=='cart'){
			require('cart.php');}
		if($_GET['target']=='blog'){
			require('blog.php');}
		if($_GET['target']=='blog_single'){
			require('blog_single.php');}			
		if($_GET['target']=='products'){
			require('product.php');}
		if($_GET['target']=='result'){
			require('shop.php');}
		if($_GET['target']=='login'){
			require('login.php');}
		if($_GET['target']=='register'){
				require('register.php');}
		if($_GET['target']=='dashboard_user'){
			require('user/dashboard_user.php');
		}
		}else{
		  require('home.php');
		  }
	   require("footer.php"); 
	   require("js.php"); 
	  ?>
	  
   </body>
</html>