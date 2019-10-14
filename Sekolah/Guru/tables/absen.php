<?php include_once('../../config/koneksi.php'); ?>
<div class="module">
	<div class="module-head">
		<h3>Data Absen Hari ini</h3>&nbsp;
	</div>

	<?php
	if ($_SESSION['Level'] == 'Admin') { ?>
	   	<a href="?page=absen" class="btn btn-info">All Students</a>

	    <?php
	    $sk=$con->query("SELECT * FROM kelas ORDER BY nama_kelas ASC");
	    while($rk=$sk->fetch_array()) {
	    ?>
	        <a href="?page=absen2&id_kelas=<?php echo $rk['id_kelas']; ?>" class="btn btn-info"><?php echo $rk['nama_kelas']; ?></a>
	   	<?php
	   	}
   	}
   	elseif ($_SESSION['Level'] == 'Wali kelas') {
   		if ($_SESSION['kelas'] == '2') { //XA
   			echo "<a href='?page=absen&id_kelas=2' class='btn btn-info'>XA</a>";
   		}
   		elseif ($_SESSION['kelas'] == '1') { //XII
   			echo "<a href='?page=absen&id_kelas=1' class='btn btn-info'>XII</a>";
   		}elseif ($_SESSION['kelas'] == '3'){
   			echo "<a href='?page=absen&id=3' class='btn btn-info'>XB</a>";
   		}
   	}
   	?>

	<div style="overflow-x:auto">
		<form method="POST" action="" enctype="multipart/form-data">
				<table border="1">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nama Siswa </th>
							<th>Kelas</th>
							<th>Jam Masuk</th>
							<th>Keterangan</th>
							<th>Status</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						<?php
		      			$tgl_absen  = date('Y-m-d');
		      			$cek = $_SESSION['kelas'];
		      			if ($_SESSION['Level'] == 'Admin') {
		                	$kelas = mysqli_query($con, "SELECT * FROM absen JOIN siswa ON absen.nis = siswa.nis JOIN kelas k ON siswa.id_kelas = k.id_kelas WHERE tgl_absen = '$tgl_absen' GROUP BY siswa.nis");
		                } else {
		                	$kelas = mysqli_query($con, "SELECT * FROM absen JOIN siswa ON absen.nis = siswa.nis JOIN kelas k ON siswa.id_kelas = k.id_kelas WHERE tgl_absen = '$tgl_absen' AND k.id_kelas = '$cek' GROUP BY siswa.nis");
		                }
		                while ($row = mysqli_fetch_array($kelas)) {
		                ?>
		                <tr>
		                    <td><?php echo $row['nis']; ?></td>
		                    <td><?php  echo $row['nama_siswa']; ?></td>
		                    <td><?php  echo $row['nama_kelas']; ?></td>
		                    <td><?php  echo $row['jam_masuk'] ?></td>
		                    <td><?php  echo $row['keterangan'] ?></td>
		                    <td><?php  echo $row['status'] ?></td>
		                    <td><form action="" method="post" enctype="multipart/form-data">
											        Pilih file: <input type="file" name="berkas" />
											        <input type="submit" name="upload" value="upload" />
											    </form>
		                 <?php } ?>
		                </tr>
					</tbody>

				</table>
			</form>
	</div>
</div>

	<!-- UPLOAD SURAT -->
	<?php
	error_reporting(0);
	// ambil data file
	$namaFile = $_FILES['berkas']['name'];
	$namaSementara = $_FILES['berkas']['tmp_name'];
	// tentukan lokasi file akan dipindahkan
	$dirUpload = "tables/gambar/";
	// pindahkan file
	$terupload = move_uploaded_file($namaSementara,$dirUpload.$namaFile);
	if ($terupload) {
		echo "<script>alert('Data berhasil disimpan');</script>
				<meta http-equiv='refresh' content='0;URL=layoutguru.php'>";
	}
	?>
