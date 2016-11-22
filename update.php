<html>
	<head>
		<title>Tambah Data Mahasiswa</title>
	<body>
	<center>
		<h2>Edit Data Mahasiswa</h2>
		<?php
			include "koneksi.php";
			$edit= mysql_query("SELECT * from tb_mahasiswa where nim='$_GET[nim]'");
			$data= mysql_fetch_array($edit);
		?>
				<form action="updatesis.php" method="post">
					<table>
						<tr>
							<td>NIM</td>
							<td><input type="text" name="nim" <?php echo "value=$data[nim]"; ?>></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" <?php echo "value=$data[nama]"; ?>></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>
								<?php
							if($data['jenis_kel']=='L'){
								echo "<input type='radio' name='gender' value=L checked>Laki-laki
									  <input type='radio' name='gender' value=P >Perempuan";
							}
							else{
								echo "<input type='radio' name='gender' value=L >Laki-laki
									  <input type='radio' name='gender' value=P checked>Perempuan";
							}
						?>
							</td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td><input type="text" name="tmptlahir" <?php echo "value=$data[tempat_lahir]"; ?>></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>
                        <select name="tgl">
                            <option value=0>Tanggal</option>
                            <?php
                            $tgl=$data[tgl_lhr];
                            $tanggal=substr($tgl,8,2);
                            $bulan=  substr($tgl,5,2);
                            $tahun=  substr($tgl,0,4);
                            for($t=1;$t<32;$t++){
                                if($t==$tanggal){
                                    echo "<option value='$t' selected>$t</option>";
                                }
                                else{
                                    echo "<option value='$t'>$t</option>";
                                }
                            }
                            ?>
                        </select>
                        <select name="bulan">
                            <option value=0>Bulan</option>
                            <?php
                            for($bln=1;$bln<13;$bln++){
								if($bln==$bulan){
									echo "<option value='$bln' selected>$bln</option>";
								}
								else{
									echo "<option value='$bln'>$bln</option>";
								}
							}
                            ?>
                        </select>
                        <select name="thn">
                            <option value=0>Tahun</option>
                            <?php
                            for($thn=1991;$thn<2016;$thn++){
								if($thn==$tahun){
									echo "<option value='$thn' selected>$thn</option>";
								}
								else{
									echo "<option value='$thn'>$thn</option>";
								}

                            }
                            ?>
                        </select>

                    </td>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td><select name="vjur">
								<option value="-">-</option>
							<?php
							$tampil = mysql_query("SELECT * FROM tb_jurusan");
							while ($r=mysql_fetch_array($tampil)){
								if ($r[kode_program]==$data) {
									echo "<option value='$r[kode_program]'selected>$r[nama_program]</option>";
								}else {
									echo "<option value='$r[kode_program]'>$r[nama_program]</option>";
								}

							}
							?>
							</td></select>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><input type="text" name="vtelp" <?php echo "value=$data[telepon]"; ?>></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="valamat" <?php echo "value=$data[alamat]" ?>></td>
						</tr>
						<tr>
							<td><input type="submit" value="Update"></td>
						</tr>
					</table>
				</form>

	</body>
</head>
