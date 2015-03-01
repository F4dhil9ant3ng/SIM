<?php
// ## Environment Settings
$template="default"; // nama template yang digunakan, "default" adalah template standar
$homedir=""; // direktori SIM
if($homedir == "")  //menentukan, apakah akan menampilkan separator atau tidak
	$separator=""; //tergantung dari homedir yang digunakan
else
	$separator="/";

$home_uri="http://" . $_SERVER["HTTP_HOST"] . $separator . $homedir . "/"; // URI halaman awal
$template_uri=$home_uri . "templates/$template/"; // URI template
$dashboard=$home_uri . "home.php/"; // URI dashboard
                             
// ## Database Server Settings
$servername="localhost"; // alamat server database
$username="sim"; // username database
$password="sim"; // password database
$dbname="sim"; // database
$conn=new mysqli ( $servername, $username, $password, $dbname ); // koneksi ke database
if($conn->connect_error) {
	die ( "Koneksi ke basisdata gagal: " . $conn->connect_error ); // tampilkan pesan kesalahan jika gagal koneksi ke database
}

// ## Informasi debug
$build="0.216"; // versi
$debuginfo=FALSE; // tampilkan informasi debug, TRUE=tampil, FALSE=tidak tampil
if($debuginfo) {
	$showversion=TRUE; // tampilkan versi SIM
	$revealpath=TRUE; // tampilkan lokasi berkas
	$showrevdate=FALSE; // tampilkan tanggal perbaikan berkas terakhir
}

?>
