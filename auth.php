<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'config/koneksi.php';
 
// menangkap data yang dikirim dari form login
$ukg = $_POST['ukg'];
$nik = $_POST['nik'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where no_ukg='$ukg' and nik='$nik'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="peserta"){
 
		// buat session login dan username
		$_SESSION['no_ukg'] = $ukg;
		$_SESSION['level'] = "peserta";
		// alihkan ke halaman dashboard admin
		header("location:main.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="admin"){
		// buat session login dan username
		$_SESSION['no_ukg'] = $ukg;
		$_SESSION['level'] = "admini";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_pegawai.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>