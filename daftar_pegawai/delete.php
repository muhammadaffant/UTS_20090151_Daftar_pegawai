<?php
include "home.php";

$id_db_pegawai = $_GET['id'];

$query_delete = "delete from tb_pegawai where no= '$id_db_pegawai'";

$query_delete_ok = mysqli_query($connect,$query_delete);

if ($query_delete_ok){
	
	echo "<script>
                alert('Hapus data sukses');
                document.location='home.php';
            </script>";
	
	
}
else
{
    echo "<script>
    alert('Hapus data gagal!!!');
    document.location='home.php';
</script>";

}

?> 