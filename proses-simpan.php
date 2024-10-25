<?php
// Panggil koneksi database
include 'config/database.php';
var_dump($db); // Untuk debugging


if (isset($_POST['simpan'])) {
	$id        = mysqli_real_escape_string($db, trim($_POST['id']));
	$username  = mysqli_real_escape_string($db, trim($_POST['username']));
	$password  = mysqli_real_escape_string($db, trim($_POST['password']));
	$level     = $_POST['level'];
	$nis       = mysqli_real_escape_string($db, trim($_POST['nis']));


	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO user( id, username, password, level, nis)					    												 													
										  VALUES ('$id', '$username', '$password', '$level', '$nis')");	 
													 
													 													 
	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}
}
