<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
  header("location: index.php");
}
?>
<?php include 'header.php'; ?>


<!-- About Section-->
<section class="bg-light py-5">
  <div class="container px-5">
    <div class="row gx-5 justify-content-center">
      <div class="col-xxl-8">
        <div class="text-center my-5">
          <h2 class="display-5 fw-bolder"><span class="text-primary d-inline">Tentang</span></h2>
          <p class="lead fw-light mb-4">Sistem Pakar Diagnosa Hama Dan Penyakit Tanaman Padi</p>
          <p class="text-muted">Tanaman padi merupakan tanaman di mana hasilnya menjadi sumber pangan penting bagi warga Indonesia. Dalam penanaman padi yang dilakukan para petani tidak terlepas dari hama maupun penyakit yang menyerang tanaman mereka. Tujuan dirancangnya sebuah website adalah untuk menjadi alat bantu bagi seorang petani dalam menunjukkan penyakit yang terdapat pada tanaman padi sehingga kedepannya tidak ada kerugian yang diakibatkan keterlambatan penanganan penyakit tanaman padi sehingga bisa menyebabkan terjadinya gagal panen maupun mengalami kerugian.</p>

        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>