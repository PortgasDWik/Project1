<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
    header("location: index.php");
}
?>
<?php include 'header.php'; ?>

<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="col align-self-center">
                        <h1 class="display-3 fw-bolder mb-5"><span class="fw-bolder text-success">Ruang Padi</span></h1>
                        Merupakan sistem informasi berbasis Website yang memanfaatkan teknologi Sistem Pakar didalamnya. Dengan menggunakan sistem pakar ini petani dapat mengenali atau memeriksakan keluhan terhadap tanaman padinya hanya dengan menjawab pertanyaan yang diberikan oleh sistem, kemudian petani dapat melihat hasil test dengan hasil yang direpresentasikan dalam bentuk persentase.
                        </p>
                    </div>
                    <h1 class="display-6 fw-bolder mb-5"><span class="fw-bolder text-primary">Mudah dan Cepat</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="diagnosa.php">Diagnosa sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                    <img class="profile-img" src="assets/ruangpadi.png" alt="..." />

                </div>
            </div>
        </div>
    </div>
    </div>
</header>


<?php include 'footer.php'; ?>