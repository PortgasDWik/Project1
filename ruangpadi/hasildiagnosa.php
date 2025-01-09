<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
    header("location: index.php");
}
?>
<?php include 'header.php'; ?>

<body class="d-flex flex-column h-100 bg-light">
    <div class="text-center mb-5">
        <h1 class="fw-bolder">Detail Diagnosa</h1>
        <p class="lead fw-normal text-muted mb-0">Hasil Diagnosa</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-sm-8 text-justify"> 
          <div class="form-group"  method="POST">
             <br><label class="control-label col-sm-2">ID :</label>
             <div class="col-sm-10">
                <?php
                $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
                $sql = mysqli_query ($konek_db,$tampil);
                while($data = mysqli_fetch_array ($sql))
                {
                   echo "<input type='text'  class='form-control' id='idpenyakit' readonly value='".$data['idpenyakit']."'><br>";
               }
               ?>
           </div>
       </div>	
       <div class="form-group"  method="POST">
         <br><label class="control-label col-sm-2">NAMA :</label>
         <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
            $sql = mysqli_query ($konek_db,$tampil);
            while($data = mysqli_fetch_array ($sql))
            {
               echo "<input type='text'  class='form-control' id='namapenyakit' readonly value='".$data['namapenyakit']."'><br>";
           }
           ?>
       </div>
   </div>
   <div class="form-group"  method="POST">
     <br><label class="control-label col-sm-2">JENIS :</label>
     <div class="col-sm-10">
        <?php
        $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
        $sql = mysqli_query ($konek_db,$tampil);
        while($data = mysqli_fetch_array ($sql))
        {
           echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='".$data['jenistanaman']."'><br>";
       }
       ?>
   </div>
</div>	
<div class="form-group"  method="POST">
 <br><label class="control-label col-sm-2">GEJALA :</label>
 <div class="col-sm-10">
    <?php
    $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='".$_GET['id']."' and p.namapenyakit=b.namapenyakit";
    $sql = mysqli_query ($konek_db,$tampil);
    while($data = mysqli_fetch_array ($sql))
    {
       echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='".$data['gejala']."'><br>";
   }
   ?>
</div>
</div>	
<div class="form-group"  method="POST">
 <br><label class="control-label col-sm-2">KULTUR TEKNIS :</label><br>
 <div class="col-sm-10">
    <?php
    $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
    $sql = mysqli_query ($konek_db,$tampil);
    while($data = mysqli_fetch_array ($sql))
    {
       echo "<textarea  rows='8' class='form-control' id='penanganan'  readonly>".$data['kulturteknis']."</textarea><br>";
   }
   ?>
</div>  
</div>
<div class="form-group"  method="POST">
 <br><label class="control-label col-sm-2">FISIK MEKANIS :</label><br>
 <div class="col-sm-10">
    <?php
    $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
    $sql = mysqli_query ($konek_db,$tampil);
    while($data = mysqli_fetch_array ($sql))
    {
       echo "<textarea rows='8' class='form-control' id='penanganan' readonly>".$data['fisikmekanis']."</textarea><br>";
   }
   ?>
</div>  
</div>
<div class="form-group"  method="POST">
 <br><label class="control-label col-sm-2">KIMIAWI :</label><br>
 <div class="col-sm-10">
    <?php
    $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
    $sql = mysqli_query ($konek_db,$tampil);
    while($data = mysqli_fetch_array ($sql))
    {
       echo "<textarea  rows='8' class='form-control' id='penanganan' readonly>".$data['kimiawi']."</textarea><br>";
   }
   ?>
</div>  
</div>
<div class="form-group"  method="POST">
 <br><label class="control-label col-sm-2">HAYATI :</label><br>
 <div class="col-sm-10">
    <?php
    $tampil = "SELECT * FROM penyakit where idpenyakit='".$_GET['id']."'";
    $sql = mysqli_query ($konek_db,$tampil);
    while($data = mysqli_fetch_array ($sql))
    {
       echo "<textarea rows='8' class='form-control' id='penanganan' readonly>".$data['hayati']."</textarea><br>";
   }
   ?>
</div>  
</div>
</div>
</div>
</div>

<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>
<?php include 'footer.php'; ?>
