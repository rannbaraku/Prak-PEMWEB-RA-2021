<!DOCTYPE html>

<html>
<?php
  
  //deklarasi variabel menyimpan data
  $num1 = $_POST['pertama'];
  $num2 = $_POST['kedua'];

  //fungsi untuk menambahkan bilangan
  function Tambahkan(){
    global $num1, $num2;
    echo $num1 + $num2;
  }

  //fungsi untuk mengurangkan bilangan
  function Kurangkan(){
    global $num1, $num2;
    echo $num1- $num2;
  }

  //fungsi untuk mengalikan bilangan
  function Kalikan(){
    global $num1, $num2;
    echo $num1 * $num2;
  }

  //fungsi untuk membagi bilangan
  function Bagikan(){
    global $num1, $num2;
    echo $num1 / $num2;
  }

  //fungsi untuk melakukan modulus bilangan
  function Modkan(){
    global $num1, $num2;
    echo $num1 % $num2;
  }

?>

<head>
  <!--link untuk css file-->
  <title>latihan 1</title>

         <!--link untuk css file-->
         <link rel="stylesheet" type="text/css" href="style.css">
        <!--link untuk font yang saya gunakan-->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
</head>

<body>
<!--Judul halaman-->
<header>
  <H1>Operasi Aritmatika</H1>
</header>

  <!--Pengisian Bilangan-->
<div class="formulir">
<form method="post" action="Latihan1-119140061.php" >

     Bilangan 1   <input type="text" name="pertama" class = "isian"  require></input><br><br>
     Bilangan 2   <input type="text" name="kedua" class = "isian"  require></input><br>

      <input type="submit" name="hasil" class = "submit" value="Hitung Operasi"></input></td>
</form>
</div>

  <!--Hasil operasi-->
<br><h3>Berikut merupakan hasil setiap operasi</h3>
<h3>dari kedua bilangan</h3></br>
<?php if(isset($_POST['hasil'])){ ?>
  <table>
  <tr>
 
    <th>Operasi</th>
    <th>hasil</th>
  </tr>

  <tr>
    <!--pemanggilan fungsi penjumlahan-->
    <td>Penjumlahan</td>
    <td><?php Tambahkan(); ?><br></td>
  </tr>

  <tr>
    <!--pemanggilan fungsi Pengurangan-->
    <td>Pengurangan</td>
    <td><?php Kurangkan(); ?><br></td>
  </tr>

  <tr>
    <!--pemanggilan fungsi Perkalian-->
    <td>Perkalian</td>
    <td><?php Kalikan(); ?><br></td>
  </tr>

  <!--pemanggilan fungsi Pembagian-->
  <tr>
    <td>Pembagian</td>
    <td><?php Bagikan(); ?><br></td>
  </tr>

  <tr>
     <!--pemanggilan fungsi modulus-->
    <td>Modulus</td>
    <td><?php Modkan(); ?><br></td>
</tr>
</table>

<?php } ?>

  <!--header-->
<footer><p>Randi Baraku - 119140061</p></footer>
</body>
</html>
