<?php
$patharray=explode("/",$_SERVER['REQUEST_URI']);
if(count($patharray)>3){
	$realpatharray=array_slice($patharray, 2);
	$path=implode("/",$realpatharray);
	$filepath=$path.".php";
	if($debuginfo){
	?>
		<div id="debuginfo"><p>Debug Info</p>
			To remove this box, set debug information setting in conf.php file.
			<?php
		if($showversion)
			echo "<p>SIM Version: $build </p>";
		if($revealpath)
			echo "<p>File path: $filepath </p>";
		if($showrevdate)
			echo "<p>Revision date: ".filemtime($filepath)."</p>";
			?>

		</div>
	<?php
	}
	include $filepath;

}
else
{
?><div id="dataform">
<h4>Selamat datang di SIM</h4>
<p>Silakan pilih menu untuk memulai</p>
<ul>
	<li>Transaksi: Pengolahan aliran kas</li>
	<li>Inventory: Pengolahan persediaan bahan baku dan produk jadi</li>
	<li>Laporan: Pelaporan keuangan dan persediaan</li>
	<li>Data Master: Pengolahan data master seperti jenis aliran kas dan jenis transaksi</li>
	<li>Menu pengguna: Mengubah katasandi dan keluar dari aplikasi</li>
	<li>Info: Berbagai informasi seperti panduan penggunaan, versi, lisensi, dsb.</li>
</ul>
</div>
<?php 
}
?>