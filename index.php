<!DOCTYPE html>
<html>
<head>
	<?php
	include"koneksi.php";
	?>
	<a href="tambah_data.php"> Tambah Data</a>
	<title>Index</title>
</head>
<body>
	<a href="tambah_data.php"></a>
	<table width="80%" border="1">
		<tr>
			<th>Nama</th> <th>Email</th> <th>No HP</th> <th>Update</th>
		</tr>


<?php
$hasil=mysqli_query($koneksi,"SELECT * FROM users ORDER BY id DESC");
while($user_data = mysqli_fetch_array($hasil)){
		echo'<tr>';
		echo"<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['no_hp']."</td>";
    echo "<td>".$user_data['email']."</td>";
    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
}

?>
</table>
</body>
</html>
