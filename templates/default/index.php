<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo $template_uri; ?>styles.css">
<link rel="icon" type="image/png"
	href="<?php echo $template_uri?>images/favicon.png" />
<script type="text/javascript">
function batal(){
	history.back();
	
}
function toDashboard(){
	window.location.assign("<?php echo $home_uri; ?>")
}
</script>
<title>Sistem Informasi Manajemen Industri Kecil</title>
</head>
<body>
	<div id="menu">
		<ul id="level1">
			<li><a href="<?php echo $home_uri; ?>"><img
					src="<?php echo $home_uri; ?>images/house.png" height="16px"
					width="16px"> Beranda</a></li>
			<li><a href="<?php echo $dashboard; ?>cash/cash"><img
					src="<?php echo $home_uri; ?>images/money.png" height="16px"
					width="16px"> Kas</a></li>
			<li><a href="#"><img src="<?php echo $home_uri; ?>images/package.png"
					height="16px" width="16px"> Inventory</a>
				<ul id="level2">
					<li><a href="<?php echo $dashboard; ?>inventory/materials"><img
							src="<?php echo $home_uri; ?>images/bricks.png" height="16px"
							width="16px"> Bahan Baku</a></li>
					<li><a href="<?php echo $dashboard; ?>inventory/products"><img
							src="<?php echo $home_uri; ?>images/package.png" height="16px"
							width="16px"> Produk</a></li>
				</ul></li>
			<li><a href="<?php echo $dashboard; ?>reports/reports"><img
					src="<?php echo $home_uri; ?>images/report.png" height="16px"
					width="16px"> Laporan</a></li>
			<li><a href="#"><img
					src="<?php echo $home_uri; ?>images/table_multiple.png"
					height="16px" width="16px"> Data Master</a>
				<ul id="level2">
					<li><a href="<?php echo $dashboard; ?>admin/cashflow"><img
							src="<?php echo $home_uri; ?>images/table_multiple.png"
							height="16px" width="16px"> Aliran Kas</a></li>
					<li><a href="<?php echo $dashboard; ?>admin/trans_type"><img
							src="<?php echo $home_uri; ?>images/table_multiple.png"
							height="16px" width="16px"> Jenis Transaksi</a></li>
				</ul></li>
			<li><a href="#"><img src="<?php echo $home_uri; ?>images/user.png"
					height="16px" width="16px"> <?php echo $_SESSION['name'];?></a>
				<ul id="level2">
					<li><a href="<?php echo $dashboard; ?>admin/chpass"><img
							src="<?php echo $home_uri; ?>images/user.png" height="16px"
							width="16px"> Ubah Katasandi</a></li><?php
							if($_SESSION['user_id'] == '1') {
								?>
					<li><a href="<?php echo $dashboard; ?>admin/userman"><img
							src="<?php echo $home_uri; ?>images/user_gray.png" height="16px"
							width="16px"> Pengguna</a></li>
						<?php
							}
							?>
					<li><form action="<?php echo $home_uri?>index.php" method="post" action="session.php"
							id="inlineform">
							<input type="submit" value="Keluar" name="out" id="logoutbutton">
						</form></li>
				</ul></li>
			<li><a href="#"><img
					src="<?php echo $home_uri; ?>images/information.png" height="16px"
					width="16px"> Info</a>
				<ul id="level2">
					<li><a href="<?php echo $dashboard; ?>help/help"><img
							src="<?php echo $home_uri; ?>images/help.png" height="16px"
							width="16px"> Bantuan</a></li>
					<li><a href="<?php echo $dashboard; ?>help/about"><img
							src="<?php echo $home_uri; ?>images/application.png"
							height="16px" width="16px"> Tentang</a></li>
					<li><a href="<?php echo $dashboard; ?>help/license"><img
							src="<?php echo $home_uri; ?>images/application.png"
							height="16px" width="16px"> Lisensi</a></li>
				</ul></li>
		</ul>
	</div>

	<div id="content"><?php
	include "content.php";
	?>
	</div>
	<?php
	// tampilkan pesan kesalahan jika ada.
	if(isset( $msg )) {
		echo "<div id=\"errmsg\">$msg</div>";
	}
	foreach($_SESSION as $key=>$value){
		echo "<p>$key=$value</p>";
	}
	echo count($_SESSION);
	?>
	<div id="footer">
		<div>
			<strong><a href="http://udariza.wordpress.com/cfm">SIM - Small
					Industry Manager</a></strong>. &copy; 2014 <a
				href="mailto:muhammadriza@gmail.com">Mohammad Riza Nurtam</a>.
			Licensed under MIT License
		</div>
	</div>

</body>
</html>