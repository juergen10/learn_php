<html>
	<head>
		<title></title>
	</head>
<body>
	<?php
		include "koneksi.php";
		$tgl=$_POST['thn']."-".$_POST['bulan']."-".$_POST['tgl'];
		$vnim = $_POST['nim'];
		$vnama = $_POST['nama'];
		$vgender = $_POST['gender'];
		$vtmpt = $_POST['tmptlahir'];
		$jur = $_POST['vjur'];
		$val = $_POST['valamat'];
		$vtlp = $_POST['vtelp'];
		$update= mysql_query("UPDATE tb_mahasiswa SET nama='$vnama',jenis_kel='$vgender',tempat_lahir='$vtmpt',tgl_lahir='$tgl',
			kode_program='$jur',alamat='$val',telepon='$vtlp' where nim='$vnim'");
		$upp=mysql_query($update);
	?>
	Data Siswa telah di update<br>
	<a href="dataviewsiswa.php">List Siswa</a>
</body>
</html>
