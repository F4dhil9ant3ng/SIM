<?php
session_start ();
function is_logged_in(){
	if((isset($_SESSION['user_id'])||array_key_exists('user_id', $_SESSION)) && ($_SESSION['user_id']!="" || $_SESSION['user_id']!=NULL))
		return TRUE;
	else
		return FALSE;
}

if(!is_logged_in()){
	if($_SERVER['SCRIPT_NAME']!='/index.php')
		header ( 'Location: ' . $home_uri . 'index.php?msg=Harap+login+terlebih+dahulu' );
	if(isset($_POST['in'])){
		$uname=$_POST['username'];
		$passwd=md5($_POST['password']);
		$sql="select * from users where username='$uname' and password='$passwd'";
		$res=$conn->query($sql);
		if($res->num_rows){
			$user=$res->fetch_assoc ();
			$_SESSION['user_id']=$user['user_id'];
			$_SESSION['name']=$user['realname'];
			$_SESSION['user']=$user['username'];
			header ( 'Location: ' . $dashboard );
		}
		else
			header ( 'Location: ' . $home_uri . 'index.php?msg=Maaf!+Kombinasi+pengguna+dan+katasandi+salah' );
	}
	include_once 'login.php';
}
if(is_logged_in()) {
	if($_SERVER['SCRIPT_NAME']!='/home.php')
		header ( 'Location: ' . $dashboard );  //alihkan ke dashboard, jika tidak ada yang sedang login dan tidak berada di dashboard
	if(isset( $_POST['out'] )) {   //jika ada parameter logout, proses logout
		session_destroy ();
		header ( 'Location: ' . $home_uri . 'index.php?msg=Anda+telah+keluar+dari+aplikasi' );
		exit();
	}
}
?>