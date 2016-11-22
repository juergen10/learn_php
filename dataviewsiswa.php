<html>
	<head>
		<title>Data Siswa</title>
	</head>
	<body>
		<h2>Data siswa</h2>
			<table border="1px">
				<tr align="center">
					<td>NIM</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>Tempat Lahir</td>
					<td>Tanggal Lahir</td>
					<td>Jurusan</td>
					<td>Alamat</td>
					<td>Telepon</td>
					<td>Operasi</td>
				</tr>
		<?php

			include "koneksi.php";

			$tampil = mysql_query("SELECT * FROM tb_mahasiswa ORDER BY nim");	
			$no = 1;

			while ($s = mysql_fetch_array($tampil)){
					echo '<tr>';
						echo '<td>'.$s['nim'].'</td>';
						echo '<td>'.$s['nama'].'</td>';
						echo '<td>'.$s['jenis_kel'].'</td>';
						echo '<td>'.$s['tempat_lahir'].'</td>';
						echo '<td>'.$s['tgl_lahir'].'</td>';
						echo '<td>'.$s['kode_program'].'</td>';
						echo '<td>'.$s['alamat'].'</td>';
						echo '<td>'.$s['telepon'].'</td>';
						echo '<td>
								<a href=delete.php?nim='.$s['nim'].'>Hapus</a> <a href=update.php?nim='.$s['nim'].'>Update</a>
							  </td>';
					echo '</tr>';
				$no++;

			}
		?>

	</table>
		<a href="tambah.php">Add New</a>	

	</body>
</html>
