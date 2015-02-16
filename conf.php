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
$home = $home_uri . "home.php/"; // alamat home.php, router bagi SIM dilengkapi dengan / (slash)
                             // $dashboard=$home_uri."home.php"; //url dashboard
                             
// ## Database Server Settings
$servername = "localhost"; // alamat server database
$username = "sim"; // username database
$password = "sim"; // password database
$dbname = "sim"; // database
$conn = new mysqli ( $servername, $username, $password, $dbname ); // koneksi ke database
if ($conn->connect_error) {
	die ( "Koneksi ke basisdata gagal: " . $conn->connect_error ); // tampilkan pesan kesalahan jika gagal koneksi ke database
}

// ## Debug Informations
$build = "0.216"; // version
$debuginfo = FALSE; // show debug info box
if ($debuginfo) {
	$showversion = TRUE; // SIM version
	$revealpath = TRUE; // file path
	$showrevdate = FALSE; // revision date
}
?>
