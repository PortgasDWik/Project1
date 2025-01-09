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
        <h2 class="display-5 fw-bolder"><span class="text-primary d-inline">Daftar Penyakit</span></h2>
      </center>
      <form id="form1" name="form1" method="post" action="daftarpenyakit.php">
        <label for="sel1">Jenis Tanaman</label>
        <select class="form-control" name="tanaman" onChange='this.form.submit();'>
          <option>Tanaman</option>
          <option>Padi</option>
        </select>
      </form>

      <br>
      <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped mx-auto">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID Penyakit</th>
              <th>Nama Penyakit</th>
              <th>Jenis Tanaman</th>
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
                <td><a href='detailpenyakit.php?id=" . $data[0] . "'><i class='fas fa-search'></i></a></td>
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
</section>
<?php include 'footer.php'; ?>