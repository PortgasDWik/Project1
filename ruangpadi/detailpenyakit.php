<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
  header("location: index.php");
}
?>
<?php include 'header.php'; ?>



<!-- Page content-->
<section class="py-5">
  <div class="container px-5">
    <div class="col-sm-8 text-left mx-auto">
      <center>
        <h2 class="display-5 fw-bolder"><span class="text-primary d-inline">Detail Hama dan Penyakit</span></h2>
      </center>

      <div class="form-container">
        <div class="form-group" method="POST">
          <label class="control-label">ID :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='idpenyakit' readonly value='" . $data['idpenyakit'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">NAMA :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='namapenyakit' readonly value='" . $data['namapenyakit'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">JENIS :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='jenistanaman' readonly value='" . $data['jenistanaman'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">GEJALA :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text' class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
            }
            echo "<input type='text' class='form-control' id='jenistanaman' readonly value=''><br>";
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">KULTUR TEKNIS :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['kulturteknis'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">FISIK MEKANIS :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['fisikmekanis'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">KIMIAWI :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['kimiawi'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <label class="control-label">HAYATI :</label>
          <div>
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['hayati'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>