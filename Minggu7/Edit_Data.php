<?php 
/*Koneksi databse--*/
include 'Koneksi.php';

/*mengambil data--*/
$id = $_POST['id'];
$ID = $_POST['ID'];
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$status = $_POST['status'];


/*melakukan update data--*/
if (!($ID=='' || $nama=='' || $judul=='' || $status=='')) {
	$sql = mysqli_query($koneksi,"UPDATE perpustakaan SET ID ='$ID', nama ='$nama', judul ='$judul', status ='$status' WHERE ID = '$id' ");
}
/*pesan berhasil--*/
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Ubah Data";
}
/*Pesan gagal--*/
else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Ubah Data";
}
echo json_encode($result);


?>