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
                <h2 class="display-5 fw-bolder"><span class="text-primary d-inline">Edit Hama dan Penyakit</span></h2>
            </center>

            <form method="post">
                <div class="form-group">
                    <br><label class="control-label col-sm-2">ID :</label>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<input type='text'  class='form-control' id='idpenyakit' name='idpenyakit' disabled value='" . $data['idpenyakit'] . "'><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <br><label class="control-label col-sm-2">NAMA :</label>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<input type='text'  class='form-control' id='namapenyakit' name='namapenyakit' value='" . $data['namapenyakit'] . "'><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <br><label class="control-label col-sm-2">JENIS :</label>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<input type='text'  class='form-control' id='jenistanaman' name='jenistanaman' value='" . $data['jenistanaman'] . "' data-error='Isi kolom dengan benar'><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group" method="POST">
                    <br><label class="control-label col-sm-2">GEJALA :</label>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
                        }
                        echo "<input type='text'  class='form-control' id='jenistanaman' readonly value=''><br>";
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <br><label class="control-label col-sm-2">KULTUR TEKNIS :</label><br>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<textarea  rows='8' class='form-control' id='kulturteknis' name='kulturteknis' >" . $data['kulturteknis'] . "</textarea><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <br><label class="control-label col-sm-2">FISIK MEKANIS :</label><br>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<textarea rows='8' class='form-control' id='fisikmekanis' name='fisikmekanis'>" . $data['fisikmekanis'] . "</textarea><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <br><label class="control-label col-sm-2">KIMIAWI :</label><br>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<textarea  rows='8' class='form-control' id='kimiawi' name='kimiawi'>" . $data['kimiawi'] . "</textarea><br>";
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <br><label class="control-label col-sm-2">HAYATI :</label><br>
                    <div class="col-sm-10">
                        <?php
                        $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
                        $sql = mysqli_query($konek_db, $tampil);
                        while ($data = mysqli_fetch_array($sql)) {
                            echo "<textarea rows='8' class='form-control' id='hayati' name='hayati'>" . $data['hayati'] . "</textarea><br>";
                        }
                        ?>
                    </div>
                </div>

                <?php
                if (isset($_POST['submit'])) {
                    $id = $_GET['id'];
                    $namapenyakit = $_POST['namapenyakit'];
                    $jenistanaman = $_POST['jenistanaman'];
                    $kulturteknis = $_POST['kulturteknis'];
                    $fisikmekanis = $_POST['fisikmekanis'];
                    $kimiawi = $_POST['kimiawi'];
                    $hayati = $_POST['hayati'];
                    $query = "update penyakit SET namapenyakit='" . $_POST['namapenyakit'] . "', jenistanaman='" . $_POST['jenistanaman'] . "', kulturteknis='" . $_POST['kulturteknis'] . "', fisikmekanis='" . $_POST['fisikmekanis'] . "', kimiawi='" . $_POST['kimiawi'] . "', hayati='" . $_POST['hayati'] . "' WHERE idpenyakit='$id'";
                    mysqli_query($konek_db, $query);
                    // Tampilkan pesan sukses setelah data berhasil disimpan
                    echo '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>';
                }
                ?>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                <a href="hamadanpenyakit.php" class="btn btn-primary">Kembali</a>
            </form><br>


            <?php include 'footer.php'; ?>