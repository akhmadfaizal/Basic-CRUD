<html>
<head>
	<title>Add Users</title>
</head>

<body>

	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="tambah_data.php" method="post" name="form1">
		<table width="" border="0">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td><input type="text" name="no_hp"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Add"></td>
				<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$no_hp = $_POST['no_hp'];


		// include database file
		include 'koneksi.php';

		// Memasukkan data ke dalam tabel
		$hasil = mysqli_query($koneksi, "INSERT INTO users(nama,email,no_hp) VALUES('$nama','$email','$no_hp')");

		// Menununjukan pesan ketika data dimasukkan
		echo "User added successfully. <a href='index.php'>View Users</a>";

	}
	?>
</body>
</html>
