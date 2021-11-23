<?php 

/*style untuk data yang ditampilkan--*/
include 'Koneksi.php';

/*mengambil data--*/
$ID = $_POST['ID'];
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$status = $_POST['status'];

/*menambahkan data--*/
if(!($ID=='' || $nama=='' || $judul=='' || $status=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO perpustakaan VALUES('$ID','$nama','$judul','$status')");
}

/*pesan berhasil--*/
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}
/*pesan gagal--*/
else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>