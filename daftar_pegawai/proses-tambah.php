<?php
include "../koneksi.php";
?>

<?php

$nip			= $_POST['nip'];
$nama_pegawai	= $_POST['nama_pegawai'];
$alamat	= $_POST['alamat'];
$jabatan		= $_POST['jabatan'];
$tgl_masuk		= $_POST['tgl_masuk'];
$divisi			= $_POST['divisi'];

$query_insert= "INSERT INTO tb_pegawai
            (nip,nama_pegawai,alamat,jabatan,tgl_masuk,divisi)VALUES ('$nip',
        '$nama_pegawai',
        '$alamat',
        '$jabatan',
        '$tgl_masuk',
        '$divisi')";


$query_insert_ok =mysqli_query($connect,$query_insert);


if ($query_insert_ok)
{
    echo "<script>
                alert('Tambah data sukses');
                document.location='home.php';
            </script>";
	
	
}
else
{
    echo "<script>
    alert('Tambah data gagal!!!');
    document.location='home.php';
</script>";

}

?> 