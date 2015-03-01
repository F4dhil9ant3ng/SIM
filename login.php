<!DOCTYPE html>
<html>
<head>
<title>Small Industry Manager</title>
<link rel="stylesheet" href="<?php echo $template_uri?>styles.css">
<link rel="icon" type="image/png"
	href="<?php echo $template_uri?>images/favicon.png" />
</head>
<body>
	<div align="center">
	<?php
	if(isset( $_GET['msg'] )) {
		echo "<div id=\"errmsg0\">" . $_GET['msg'] . "</div>";
	}
	?>
<div id="login">
			<strong>Silakan masuk ke dalam aplikasi</strong>
			<form method="post">
				<p></p>
				<div id="loginlabel">Pengguna</div>
				<div id="loginform">
					<img src="images/user.png" height="16px" width="16px"> <input
						type="text" name="username" autofocus="autofocus">
				</div>
				<p></p>
				<p></p>
				<div id="loginlabel">Katasandi</div>
				<div id="loginform">
					<img src="images/key.png" height="16px" width="16px"> <input type="password" name="password">
				</div>
				<p></p>
				<p></p>
				<div id="loginlabel">&nbsp;</div>
				<div id="loginbutton">
					<input type="submit"  name="in" value="Masuk" id="loginsubmit"> <input type="reset" value="Batal" id="loginreset">
				</div>
			</form>
		</div>
	</div>
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