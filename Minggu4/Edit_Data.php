<?php 
/*Koneksi databse--*/
include 'Koneksi.php';

/*mengambil data--*/
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

/*melakukan update data--*/
if (!($nim=='' || $nama=='' || $prodi=='' || $angkatan=='')) {
	$sql = mysqli_query($koneksi,"UPDATE mahasiswa SET nim ='$nim', nama ='$nama', prodi ='$prodi', angkatan ='$angkatan' WHERE nim = '$id' ");
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