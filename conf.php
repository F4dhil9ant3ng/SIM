<?php
// ## Environment Settings
$homedir = ""; // direktori SIM
if ($homedir == "")
	$separator = "";
else
	$separator = "/";
$home_uri = "http://" . $_SERVER ["HTTP_HOST"] . $separator . $homedir . "/"; // url SIM
$template = "default"; // nama template
$template_uri = $home_uri . "templates/$template/"; // lokasi template
$home = $home_uri . "home.php/"; // lokasi router
                             
// ## Database Server Settings
$servername = "localhost"; // alamat server database
$username = "sim"; // username database
$password = "sim"; // password database
$dbname = "sim"; // database
$conn = new mysqli ( $servername, $username, $password, $dbname ); // koneksi ke database
if ($conn->connect_error) {
	die ( "Koneksi ke basisdata gagal: " . $conn->connect_error ); // tampilkan pesan kesalahan jika gagal koneksi ke database
}

// ## Informasi debug
$build = "0.216"; // versi
$debuginfo = FALSE; // tampilkan informasi debug, TRUE=tampil, FALSE=tidak tampil
if ($debuginfo) {
	$showversion = TRUE; // tampilkan versi SIM
	$revealpath = TRUE; // tampilkan lokasi berkas
	$showrevdate = FALSE; // tampilkan tanggal perbaikan berkas terakhir
}

?>
