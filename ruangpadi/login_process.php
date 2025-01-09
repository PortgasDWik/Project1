<?php
session_start();
include('koneksi.php');

if(isset($_SESSION['login_user'])){
	header("location: about.php");
}

    // Proses login
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

        // Lakukan validasi login di sini (misalnya memeriksa di database)
        // Jika login berhasil, simpan data pengguna ke session dan redirect ke halaman yang diinginkan.
        // Jika login gagal, Anda bisa menampilkan pesan kesalahan di modal.
}
?>
