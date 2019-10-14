<?php
error_reporting(0);
include_once('../config/koneksi.php');

if(isset($_POST['login'])){
$user =$_POST['username'];
$pass =$_POST['password'];

//MENCARI USERNAME DAN PASSWORD

$cari=mysqli_query($con,"SELECT * FROM login WHERE username='$user' AND password='$pass'");
$ketemu = mysqli_num_rows($cari);

if($ketemu > 0)

{
	$row= mysqli_fetch_array($cari);

	//ATUR SESSION
	//VARIABEL SESI = DARI FIELD DATABASE

	$_SESSION['username']=$row['username'];
	$_SESSION['password']=$row['password'];
	$_SESSION['Level']=$row['level'];
	$_SESSION['kelas']=$row['id_kelas'];

	if($_SESSION['Level']=='Admin'){

	echo " <script>
						alert('Selamat Datang');
						document.location='Guru/layoutguru.php';
		   </script> ";

	}
	else if($_SESSION['Level']=='Wali kelas'){

	echo " <script>
						alert('Selamat Datang');
						document.location='Guru/layoutguru.php';
			 </script> ";

	}


}
else{

	echo " <script>
						alert('Log In Gagal');
						document.location='layoutsekolah.php?login';

		   </script> ";


}
}

?>
