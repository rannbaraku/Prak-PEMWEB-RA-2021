<?php

/*Koneksi database--*/
include 'Koneksi.php';

/*menampilkan semua data--*/
$sql = mysqli_query($koneksi, "SELECT * FROM perpustakaan");
$result = array();
while($fetchData = mysqli_fetch_array($sql)){
	$result[] = $fetchData;
}
echo json_encode($result);

?>