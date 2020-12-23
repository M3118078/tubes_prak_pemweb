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
		<link rel="stylesheet" type="text/css" href="styles/shop_styles.css">
    	<link rel="stylesheet" type="text/css" href="styles/shop_responsive.css">
	</head>
	<body>
		<div class="container">
		<center>
		<h1 class="mt-5">Register Form</h1>
		<p class="lead">Silahkan Daftarkan Identitas Anda</p>

		<div class="row">
			<div class="col pedding-50"></div>
			<form method="post" action="terima_register.php" class="col-4">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
				</div>
				<div class="form-group">
					<label for="nama_lengkap">Nama Lengkap</label>
					<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">	
				</div>
				<div class="form-group">
					<label for="e_mail">Email</label>
					<input type="text" class="form-control" name="e_mail" id="e_mail" placeholder="Masukkan E-mail">
				</div>
				<div class="form-group">
					<label for="hp">Nomor HP</label>
					<input type="text" class="form-control" name="hp" id="hp" placeholder="Masukkan No HP">
				</div>			
				<div class="form-group">
					<label for="date"> Tanggal Lahir</label>	
					<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
				</div>
				<div class="form-group">
				<label for="gender">Gender</label>
				<select class="form-control" name='gender'>
					<option id="gender" value ="Pria">Pria</option>";
					<option id="gener" value ="Wanita">Wanita</option>";
				</select>
				</div>
			
				</br>
				</br>
				<button type="submit" class="btn btn-primary" name="register">Register</button>
				<a href='index.php?target=login'>Sign in</a>"
			</form>
			<div class="col pedding-50"></div>
		
		</div>
		  
		</center>
		</div>
	</body>
</html>