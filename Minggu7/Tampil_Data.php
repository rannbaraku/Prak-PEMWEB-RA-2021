<?php 
/*koneksi database-*/
include 'Koneksi.php';

/*menampilkan data--*/
$id = $_POST['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM perpustakaan WHERE ID = '$id' ");
$result = mysqli_fetch_array($sql);
$result['id'] = $id;
echo json_encode($result);
?>