<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Website Diagnosa Penyakit Tanaman Padi</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/ruangpadi.png" />
  <!-- Custom Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
      <div class="container px-5">
        <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Ruang Admin Diagnosa Penyakit Tanaman Padi</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
            <li class="nav-item"><a class="nav-link" href="homeadmin.php">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="hamadanpenyakit.php">Hama dan Penyakit</a></li>
            <li class="nav-item"><a class="nav-link" href="gejala.php">Gejala</a></li>
            <li class="nav-item"><a class="nav-link" href="basispengetahuan.php">Basis Pengetahuan</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
          </ul>
        </div>
  </main>
  <!-- Page content-->
  <section class="py-5">
    <div class="container px-5">
      <!-- Contact form-->
      <div class="bg-light rounded-4 py-5 px-4 px-md-5">
        <div class="text-center mb-5">
          <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="fa-solid fa-gear"></i></div>
          <h1 class="fw-bolder">Selamat datang Admin</h1>
          <p class="lead fw-normal text-muted mb-0">silahkan pilih menu untuk mengelolah data</p>

        </div>

      </div>
    </div>
  </section>


  <?php include 'footer.php'; ?>