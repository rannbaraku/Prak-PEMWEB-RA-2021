
<?php 
/*koneksi databse--*/
include 'Koneksi.php';

$id = $_POST['ID'];
/*smenghapus data--*/
$sql = mysqli_query($koneksi,"DELETE FROM perpustakaan WHERE ID = '$id' ");

/*persan berhasil--*/
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}
/*pesan gagal-*/
else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>