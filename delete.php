<html>
	<head>
		<title>Delete</title>
	</head>
	<body>
	<?php
		include "koneksi.php";
		$sebelah=$_GET['nim'];

		$del = mysql_query("DELETE FROM tb_mahasiswa WHERE nim = '$sebelah'");

		echo "Data Siswa Berhasil di hapus";

	?>
		<a href="dataviewsiswa.php">Kembali</a>
	</body>
</html>
