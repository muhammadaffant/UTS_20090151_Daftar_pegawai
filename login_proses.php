<?php

session_start();

include 'koneksi.php';

$nip	= $_POST['nip'];
$password	= md5($_POST['password']);

$data	= mysqli_query($connect,"select * from tb_user where nip='$nip' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){

	$row = mysqli_fetch_assoc($data);
	$_SESSION['nip'] = $nip;
	$_SESSION['level'] = $row['nama_pegawai'];
	$_SESSION['status'] = "login";

	if($row['level']=="1"){
		header("location:daftar_pegawai/home.php");
	}else{
		header("location:daftar_pegawai/home.php");
	}
}else{
	header("location:index.php?pesan=gagal");
}

?>