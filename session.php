<?php
// ## mulai sesi
session_start ();

// ## alihkan ke halaman login jika sesi yang sah tidak ada
if (! isset ( $_SESSION ['user_id'] )) {
	header ( 'Location: ' . $home_uri . 'index.php' );
}
?>