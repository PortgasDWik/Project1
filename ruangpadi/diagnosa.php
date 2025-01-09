<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
    header("location: index.php");
}
?>
<?php include 'header.php'; ?>

<body class="d-flex flex-column h-100 bg-light">
    <div class="text-center mb-5">
        <center>
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Form Diagnosa</span></h2>
        </center>
        <p class="lead fw-normal text-muted mb-0">Ceklis kriteria yang sesuai</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">

            <form id="form1" name="form1" method="post" action="diagnosa.php">
                <label for="sel1">Jenis Tanaman</label>
                <select class="form-control" name="tanaman" onChange='this.form.submit();'>
                    <option>Tanaman</option>
                    <option>Padi</option>
                </select>
            </form>
            <br>
            <form id="form2" name="form2" method="post" action="diagnosa.php">
                <?php
                if (isset($_POST['tanaman']))
                    if ($_POST['tanaman'] != "jenistanaman") {
                        echo  "<br><label>AKAR</label><br>";
                        $tampil = "select * from gejala where daerah='akar' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                        $query = mysqli_query($konek_db, $tampil);
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                        }
                    }
                ?>
                <?php
                if (isset($_POST['tanaman']))
                    if ($_POST['tanaman'] != "jenistanaman") {
                        echo  "<br><label>BATANG</label><br>";
                        $tampil = "select * from gejala where daerah='batang' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                        $query = mysqli_query($konek_db, $tampil);
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                        }
                    }
                ?>

                <?php
                if (isset($_POST['tanaman']))
                    if ($_POST['tanaman'] != "jenistanaman") {
                        echo  "<br><label>DAUN</label><br>";
                        $tampil = "select * from gejala where daerah='daun' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                        $query = mysqli_query($konek_db, $tampil);
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                        }
                    }
                ?>
                <?php
                if (isset($_POST['tanaman']))
                    if ($_POST['tanaman'] != "jenistanaman") {
                        echo  "<br><label>BUAH/UMBI</label><br>";
                        $tampil = "select * from gejala where daerah='Buah/Umbi' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                        $query = mysqli_query($konek_db, $tampil);
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                        }
                    }
                ?>
                <?php
                if (isset($_POST['tanaman']))
                    if ($_POST['tanaman'] != "jenistanaman") {
                        echo  "<br><label>BUNGA</label><br>";
                        $tampil = "select * from gejala where daerah='bunga' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                        $query = mysqli_query($konek_db, $tampil);
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                        }
                    }
                ?>
                <?php
                if (isset($_POST['tanaman']))
                    if ($_POST['tanaman'] != "jenistanaman") {
                        echo  "<br><label>BIJI</label><br>";
                        $tampil = "select * from gejala where daerah='biji' and jenistanaman= \"" . $_POST['tanaman'] . "\"";
                        $query = mysqli_query($konek_db, $tampil);
                        while ($hasil = mysqli_fetch_array($query)) {
                            echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                        }
                    }
                ?>

                <br>
                <button type="submit" name="submit" onclick="return checkDiagnosa()" class="btn btn-primary">CEK PENYAKIT</button><br><br>
                <div class="panel panel-info">
                    <div class="panel-heading">HASIL DIAGNOSA</div>
                    <div class="panel-body">
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID PENYAKIT</th>
                                        <th>Nama Penyakit</th>
                                        <th>Jenis Tanaman</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $gejala = $_POST['gejala'];
                                    $jumlah_dipilih = count($gejala);
                                    for ($x = 0; $x < $jumlah_dipilih; $x++) {
                                        $tampil = "select DISTINCT p.idpenyakit, p.namapenyakit, p.jenistanaman from basispengetahuan b, penyakit p where b.gejala='$gejala[$x]' and p.namapenyakit=b.namapenyakit group by namapenyakit";
                                        $result = mysqli_query($konek_db, $tampil);
                                        $hasil  = mysqli_fetch_array($result);
                                    }
                                    echo "
                             <tr>  
                             <td>" . $x . "</td>
                             <td>" . $hasil['idpenyakit'] . "</td>
                             <td>" . $hasil['namapenyakit'] . "</td>  
                             <td>" . $hasil['jenistanaman'] . "</td> 
                             <td><a href=\"hasildiagnosa.php?id=" . $hasil['idpenyakit'] . "\"><i class='fas fa-search'></i></a></td>
                             </tr>   

                             ";
                                }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </form>



            <?php include 'footer.php'; ?>