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
	
	<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
	 <!--Navbar-->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
      <div class="container">
        <a
          class="navbar-brand"
          href="#"
          >Halaman Pegawai </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="navbarNav"
        >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="features.php"
                >features</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="project.php"
                >project</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="contact.php"
                >contact</a
              >
            </li>
            >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="login.php"
                >LOGOUT</a
              >
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir navbar-->
    