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
		<center>
		<h1 class="mt-5">Register Form</h1>
		<p class="lead">Silahkan Daftarkan Identitas Anda</p>

		<form method="post" action="terima_register.php">
			<p>Username</p>
			<input type="text" name="username" placeholder="Masukkan Username">

			<p>Password</p>
			<input type="password" name="password" placeholder="Masukkan Password">

			<p>Nama Lengkap</p>
			<input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
			
			<p>E-mail</p>
			<input type="text" name="e_mail" placeholder="Masukkan E-mail">
			
			<p>HP</p>
			<input type="text" name="hp" placeholder="Masukkan No HP">
			
			<p>Tanggal Lahir</p>	
		    <input type="date" name="tanggal_lahir">

			Gender
			<select name='gender'>
				<option value ="Pria">Pria</option>";
				<option value ="Wanita">Wanita</option>";
				<option value =""></option>";
				<option value =""></option>";
	        </select>
	
			<p>Pilih file foto:</p>
			<input type="file" name="pict">

			<button type="submit" name="register">Register</button>
			<a href='index.php?target=login'>Sign in</a>"
		</form>  
</center>
	</body>
</html>