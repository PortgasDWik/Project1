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
		<!-- Contact form-->
		<div class="bg-light rounded-4 py-5 px-4 px-md-5">
			<div class="text-center mb-5">
				<div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-phone"></i></div>
				<h1 class="fw-bolder">Hubungi Kami</h1>
				<p class="lead fw-normal text-muted mb-0">Dwi Nur'Aini</p>
				<a aria-label="Chat on WhatsApp" href="https://wa.me/6285335560410"><img alt="Chat on WhatsApp" src="assets/wa.png" />
					<a />
			</div>

		</div>
	</div>
</section>

<?php include 'footer.php'; ?>