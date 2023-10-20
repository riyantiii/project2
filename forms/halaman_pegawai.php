<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai </title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Selamat Datang Di Halaman Pengurus</h1>
 
 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <a href="dashboard.php">LOGOUT</a>

 <br/>
 <br/>
 <?