<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>EDIT DATA PEGAWAI</title>



	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-6">
	<h3 class="text-center">Edit Data Pegawai</h3>
	<a class="btn btn-primary" href="home.php" role="button">Kembali</a>

<?php



$id_db_pegawai = $_GET['id'];

	$query_nilai ="select * from tb_pegawai where no='$id_db_pegawai'";
	$query_nilai_ok = mysqli_query($connect, $query_nilai);
	if (!$query_nilai_ok){
		printf("eror: %s\n",mysqli_error($connect));
		exit();
	}

	while ($query_result = mysqli_fetch_array($query_nilai_ok))
	
	{ 

	$nip_ok = $query_result['nip'];
	$nama_pegawai_ok = $query_result['nama_pegawai'];
	$alamat_ok = $query_result['alamat'];
	$jabatan_ok = $query_result['jabatan'];
	$tgl_masuk_ok = $query_result['tgl_masuk'];
	$divisi_ok = $query_result['divisi'];


?>

	<form method="POST" action="">
		<div class="form-group">
		<label for="nik">NIP</label>
			<input type="text" class="form-control" name="nip" id="nip_ok" value="<?php echo $nip_ok;?>">
		</div>

		<div class="form-group">
		<label for="nama_pegawai">Nama Pegawai</label>
			<input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai_ok" value="<?php echo $nama_pegawai_ok;?>">
		</div>

		<div class="form-group">
		<label for="alamat">Alamat</label>
			<input type="text" class="form-control" name="alamat" id="alamat_ok" value="<?php echo $alamat_ok;?>">
		</div>

		<div class="form-group">
		<label for="jabatan">Jabatan</label>
			<input type="text" class="form-control" name="jabatan" id="jabatan_ok" value="<?php echo $jabatan_ok;?>">
		</div>

		<div class="form-group">
		<label for="tgl_masuk">Tgl Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk_ok" value="<?php echo $tgl_masuk_ok;?>">
		</div>

		<div class="form-group">
		<label for="divisi">Divisi</label>
			<input type="text" class="form-control" name="divisi" id="divisi_ok" value="<?php echo $divisi_ok;?>">
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>

</div>
</div>

<?php
}

?>

<?php
if (isset($_POST['nip'])){

$nip	= $_POST['nip'];
$nama_pegawai	= $_POST['nama_pegawai'];
$alamat	= $_POST['alamat'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$divisi			= $_POST['divisi'];



$query_update= "
update tb_pegawai
set

	nip 			= '$nip',
	nama_pegawai 	= '$nama_pegawai',
	alamat			= '$alamat',
	jabatan 		= '$jabatan',
	tgl_masuk 		= '$tgl_masuk',
	divisi 			= '$divisi'

	where no ='$id_db_pegawai'
	";

$query_update_ok = mysqli_query($connect, $query_update);
	
if ($query_update_ok){

	echo "<script>
	alert('Update data sukses');
	document.location='home.php';
</script>";


}
else
{
echo "<script>
alert('Update data gagal!!!');
document.location='home.php';
</script>";
}

}
else{
}
?>

</body>

</html>