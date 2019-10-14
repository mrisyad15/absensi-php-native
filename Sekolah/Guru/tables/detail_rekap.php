<?php include_once('../../config/koneksi.php'); 
$nis = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM siswa JOIN kelas on kelas.id_kelas = siswa.id_kelas WHERE nis = '$nis'");
$row = mysqli_fetch_assoc($sql);
?>
<div class="module">
	<div class="module-head">
    <a href="?page=rekap-x&id_kelas=<?php echo $row['id_kelas']; ?>" class="btn btn-primary">kembali</a>
		<h3>Detail Absen <?php echo $row['nama_siswa']; ?></h3>&nbsp;
	</div>
	<div class="module-body table">
	<div class="">
		<table class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr>
					<th>Tanggal</th>
          <th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
      <?php 
          $id=$_GET['id'];
          $sql = "SELECT * FROM absen JOIN siswa ON absen.nis = siswa.nis JOIN kelas k ON siswa.id_kelas = k.id_kelas WHERE NOT absen.keterangan = 'Hadir' AND siswa.nis='$id'";
          $kelas = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($kelas)) {
      ?>
        <tr>
          <td><?php echo $row['tgl_absen']; ?></td>
          <td><?php echo $row['keterangan']; ?></td>
        </tr>
      <?php } ?>
			</tbody>
			
		</table>
	</div>
	</div>
</div><!--/.module-->