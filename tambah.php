<html>
	<head>
		<title>Tambah Data Mahasiswa</title>
	<body>
	<center>
		<h2>Entry Data Mahasiswa</h2>
				<form action="entry.php" method="post">
					<table>
						<tr>
							<td>NIM</td>
							<td><input type="text" name="nim"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>
                <input type="radio" name="gender" value="L" checked="">Laki - Laki
                <input type="radio" name="gender" value="P">Perempuan
              </td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td><input type="text" name="tmptlahir"></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><select name="tgl">
									<option value="-">Tanggal</option>
									<?php
										for ($t=1;$t<32;$t++){
											echo "<option value=$t>$t</option>";
										}
									?>
							</td></select>
							<td><select name="bulan">
								<option value="-">Bulan</option>
								<?php
									$bln[1]="Januari";
									$bln[2]="Februari";
									$bln[3]="Maret";
									$bln[4]="April";
									$bln[5]="Mei";
									$bln[6]="Juni";
									$bln[7]="Juli";
									$bln[8]="Agustus";
									$bln[9]="September";
									$bln[10]="Oktober";
									$bln[11]="November";
									$bln[12]="Desember";
									for ($b=1;$b<13;$b++){
										echo "<option value=$b>$bln[$b]</option>";
									}
								?>
								</select>
								<select name="thn">
                            <option value=0>Tahun</option>
                            <?php
                            for($thn=1991;$thn<2016;$thn++){
                            echo "<option value='$thn'>$thn</option>";
                            }
                            ?>
                        </select>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td><select name="vjur">
								<option value="-">-</option>
							<?php
							include "koneksi.php";
							$tampil = mysql_query("SELECT * FROM tb_jurusan");
							while ($r=mysql_fetch_array($tampil)){
								echo "<option value='$r[kode_program]'>$r[nama_program]</option>";
							}
							?>
							</td></select>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><input type="text" name="vtelp"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><textarea name="valamat"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" value="submit"></td>
						</tr>
					</table>
				</form>

	</body>
</head>
