<html>
	<head>
		<title>Entry Data</title>
	</head>
	<body>
		<?php

			include "koneksi.php";

			$vnim = $_POST['nim'];
			$vnama = $_POST['nama'];
			$vgender = $_POST['gender'];
			$vtmpt = $_POST['tmptlahir'];
			$jur = $_POST['vjur'];
			$val = $_POST['valamat'];
			$vtlp = $_POST['vtelp'];
			$tanggal =$_POST['thn']."-".$_POST['bulan']."-".$_POST['tgl'];

			$sql = mysql_query("INSERT INTO tb_mahasiswa (nim,nama,jenis_kel, tempat_lahir, tgl_lahir, kode_program, alamat, telepon)
								VALUES ('$vnim','$vnama','$vgender','$vtmpt','$tanggal','$jur','$val','$vtlp')") or die (mysql_error());
		$masuk = mysql_query($sql);
		//if (!$masuk){
		//die ("Gagal Tambah Data" .mysql_error());
		//}
		?>
		Data siswa telah Tersimpan
		<a href="dataviewsiswa.php">Kembali ke Data siswa</a>
	</body>
</html>
