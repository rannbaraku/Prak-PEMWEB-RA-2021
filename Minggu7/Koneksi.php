<?php
/*set password dan nama database*/
$password = "";
$nama_data_base="perpus";

/*menghubungkan pada database*/
$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

/*kondisi gagal terhubung*/
if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>