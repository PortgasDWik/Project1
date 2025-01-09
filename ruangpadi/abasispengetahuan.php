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

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
        </div>
        </nav>

        <div class="col-sm-8 text-left mx-auto">
            <center>
                <h2 class="display-5 fw-bolder"><span class="text-primary d-inline">Basis Pengetahuan</span></h2>
            </center>
            <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
                <label for="sel1">Jenis Tanaman</label>
                <select class="form-control" name="tanaman" onChange='this.form.submit();'>
                    <option>Tanaman</option>
                    <option>Padi</option>
                </select>
            </form>
            <br>
            <form id="form1" name="form1" method="post">
                <label for="sel1">Hama / Penyakit</label>
                <select class="form-control" name="penyakit">
                    <option>Hama / Penyakit</option>
                    <?php
                    $tampil = "select * from penyakit where jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query1 = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query1)) {
                        echo "<option value='" . $hasil['namapenyakit'] . "'>" . $hasil['idpenyakit'] . " " . $hasil['namapenyakit'] . "</option>";
                    }
                    ?>
                </select>

                <br><label for="sel2">GEJALA</label><br>
                <form id="form2" name="form2" method="post" action="diagnosa.php">
                    <div class="panel panel-primary">
                        <div class="panel-heading">AKAR</div>
                        <div class="panel-body">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    $tampil = "select * from gejala where daerah='akar' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                            <br>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">BATANG</div>
                        <div class="panel-body">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    $tampil = "select * from gejala where daerah='batang' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">DAUN</div>
                        <div class="panel-body">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    $tampil = "select * from gejala where daerah='daun' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">BUAH/UMBI</div>
                        <div class="panel-body">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    $tampil = "select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">BUNGA</div>
                        <div class="panel-body">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    $tampil = "select * from gejala where daerah='bunga' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">BIJI</div>
                        <div class="panel-body">
                            <?php
                            if (isset($_POST['tanaman']))
                                if ($_POST['tanaman'] != "jenistanaman") {
                                    $tampil = "select * from gejala where daerah='biji' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                                    $query = mysqli_query($konek_db, $tampil);
                                    while ($hasil = mysqli_fetch_array($query)) {
                                        echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                                    }
                                }
                            ?>

                            <br>
                        </div>
                    </div>
                    <br><button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    <?php
                    if (isset($_POST['submit'])) {
                        $penyakit = $_POST['penyakit'];
                        $gejala = $_POST['gejala'];
                        $jumlah_dipilih = count($gejala);
                        for ($x = 0; $x < $jumlah_dipilih; $x++) {
                            $hasil = mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                            if ($hasil) {
                                echo '<script language="javascript">';
                                echo 'alert("Data Berhasil disimpan")';
                                echo '</script>';
                            }
                        }
                    }

                    ?>
                </form>
                <br>
                <br>
            </form>
        </div>
        </div>
        </div>


        <?php include 'footer.php'; ?>