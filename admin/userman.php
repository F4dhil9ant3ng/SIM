<?php
// file : userman.php
// deskripsi : manajemen pengguna aplikasi
if(isset( $_POST['dele'] ) && isset( $_POST['user'] )) { // hapus data
	$msg=user_del ( $conn );
}
if(isset( $_POST['tambah'] )) { // tambah data
	$msg=user_add ( $conn );
}
if(isset( $_POST['perbaiki'] )) { // / edit data
	$msg=user_edit ( $conn );
}

if(isset( $_POST['edit'] ) && isset( $_POST['user'] )) {
	user_edit_form ( $conn );
} elseif(isset( $_POST['add'] )) {
	user_add_form ( $conn );
} else {
	echo "<form method=\"post\"><input type=\"submit\" name=\"add\" value=\"Tambah\" id=\"addbutton\" ></form>";
}

$usersql="select * from users where user_id!='1' order by user_id desc";
$userq=$conn->query ( $usersql );
if($userq->num_rows == 0) {
	$msg="Belum ada data!";
} else {
	?>
<table id="data">
	<thead>
		<tr class="tabheader">
			<!-- header baris pertama -->
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
<?php
	$line=0;
	while ( $user=$userq->fetch_assoc () ) {
		$line ++;
		?>
		<tr
			class="<?php if($line & 1) {echo "oddline";} else{ echo"evenline";} ?>">
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['realname'];?></td>
			<td><form method="post">
					<input type="hidden" name="flow_id"
						value="<?php echo $flow['flow'];?>"><input type="submit"
						name="dele" value="Hapus" id="delbutton"> <input type="submit"
						name="edit" value="Perbaiki" id="editbutton">
				</form></td>
		</tr>
	<?php
	}
	?>
	</tbody>
</table>
<?php 
}
?>