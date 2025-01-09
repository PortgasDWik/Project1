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
    </nav>
    <div class="col-sm-8 text-left mx-auto">

      <center>
        <h2 class="display-5 fw-bolder"><span class="text-primary d-inline">Daftar Hama dan Penyakit</span></h2>
      </center>
      <form id="form1" name="form1" method="post" action="hamadanpenyakit.php">
        <label for="sel1">Jenis Tanaman</label>
        <select class="form-control" name="tanaman" onChange='this.form.submit();'>
          <option>Tanaman</option>
          <option>Padi</option>
        </select>
      </form>
      <br>
      <a href="ainputpenyakit.php" class="btn btn-primary">
        <span class="bi bi-plus" aria-hidden="true"></span> Tambah Data
      </a>

      <br><br>
      <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped mx-auto">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID Penyakit</th>
              <th>Nama Penyakit</th>
              <th>Jenis Penyakit</th>
              <th>Detail</th>
            </tr>
          </thead>
          <?php
          if (isset($_POST['tanaman']))
            if ($_POST['tanaman'] != "jenistanaman") {
              $queri = "Select * From penyakit where jenistanaman = \"" . $_POST['tanaman'] . "\"";
              $hasil = mysqli_query($konek_db, $queri);
              $id = 0;
              while ($data = mysqli_fetch_array($hasil)) {
                $id++;
                echo "      
                  <tr>  
                  <td>" . $id . "</td>
                  <td>" . $data[0] . "</td>  
                  <td>" . $data[1] . "</td>  
                  <td>" . $data[2] . "</td>  
                  <td>
                  <a href='adetailpenyakit.php?id=" . $data[0] . "'><i class='bi bi-search'></i></a>
                  || <a href='aeditpenyakit.php?id=" . $data[0] . "'><i class='bi bi-pencil'></i></a>
                  || <a href='adeletepenyakit.php?id=" . $data[0] . "' onclick='return checkDelete()'><i class='bi bi-trash'></i></a>
                  </td>
                  </tr>   
                  ";
              }
            }
          ?>
        </table><br><br><br><br><br>
      </div>
    </div>
    </div>
    </div>
    </div>
    <script language="JavaScript" type="text/javascript">
      function checkDelete() {
        return confirm('Yakin menghapus data ini?');
      }
    </script>

    <?php include 'footer.php'; ?>