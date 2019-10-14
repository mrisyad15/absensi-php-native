<?php
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'data-siswa') {
			include_once('tables/datasiswa.php');
	}
	else if ($_GET['page'] == 'data-kelas') {
		include_once('tables/datakelas.php');
	}
	else if ($_GET['page'] == 'data-sekolah') {
		include_once('tables/datasekolah.php');
	}
	else if ($_GET['page'] == 'gambar') {
		include_once('tables/tampil.php');
	}
	else if ($_GET['page'] == 'akses-guru') {
		include_once('tables/akses.php');
		include_once('core/guru.php');
	}
	else if ($_GET['page'] == 'rekap-x') {
		include_once('tables/rekapx.php');
	}
	else if ($_GET['page'] == 'detail-rekap') {
		include_once('tables/detail_rekap.php');
	}else if ($_GET['page'] == 'data-siswa2') {
		include_once('tables/datasiswa2.php');
	}else if ($_GET['page'] == 'absen') {
		include_once('tables/absen.php');
	}else if ($_GET['page'] == 'absen2') {
		include_once('tables/absen2.php');
	}


 }

 else if(isset($_GET['add'])){
	if ($_GET['add'] == 'add-kelas') {
		include_once('forms/add-kelas.php');
	}
	else if($_GET['add'] == 'add-sekolah') {
		include_once('forms/add-sekolah.php');
	}
	else if($_GET['add'] == 'add-siswa') {
		include_once('forms/add-siswa.php');
	}
}

else if(isset($_GET['insert'])){
	if ($_GET['insert'] == 'insert-kelas') {
		include_once('core/insert.php');
	}
	else if ($_GET['insert'] == 'insert-siswa') {
		include_once('core/insert.php');
	}
	else if ($_GET['insert'] == 'insert-sekolah') {
		include_once('core/insert.php');
	}
}

else if(isset($_GET['edit-kelas'])){
		include_once('core/edit.php');
		include_once('forms/edit-kelas.php');
}
else if(isset($_GET['edit-siswa'])){
		include_once('core/edit.php');
		include_once('forms/edit-siswa.php');
}
else if(isset($_GET['edit-sekolah'])){
		include_once('core/edit.php');
		include_once('forms/edit-sekolah.php');
}

else if(isset($_GET['delete-kelas'])){
		include_once('core/delete.php');
}
else if(isset($_GET['delete-siswa'])){
		include_once('core/delete.php');
}
else if(isset($_GET['upload_proses'])){
		include_once('upload_proses.php');
}
else if(isset($_GET['delete-sekolah'])){
		include_once('core/delete.php');
}

else if (isset($_GET['tampil'])) {
	include_once('tables/rekap.php');
}
 else{
 	include_once('article/article.php');
 	} ?>
