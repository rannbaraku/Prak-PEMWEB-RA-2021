<!DOCTYPE html>
<html>

  <?php
    //data yang akan ditampilkan
    $array = array("larine","aduh","qifuat","toda","anevi","samid","kifuat");

    //fungsu memanggil data yang belum terurut
    function belum_terurut(){
      global $array;
      foreach ($array as $print) {
      echo $print.'&nbsp - &nbsp ';
      }
    }

    //Fungsi memanggil data yang sudah terurut
    function sudah_terurut(){
      global $array;
      sort($array);
      foreach ($array as $print) {
        echo $print.'&nbsp - &nbsp ';
      }
    }
  ?>


<Head>
    <title>Latihan 2</title>

    <!--link untuk css file-->
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!--link untuk font yang saya gunakan-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 

</Head>

<body>
    
    <!-- judul halaman -->
    <H1>Mengurutkan Data </H1><br><br>

    <!-- Konten utama -->
    <div class="kotak">

    <!-- Pemanggilan fungsi array belum terurut -->
    <p>Berikut adalah array yang belum terurut</p><br>
    <?php echo belum_terurut();?>  
    
    <!-- Pemanggilan fungsi array telah terurut -->
    <br><br><p> Berikut adalah array yang telah terurut </p><br>
    <?php echo sudah_terurut();?>  
    </div>

    <!-- footer halaman -->
    <footer><p>Randi Baraku - 119140061</p></footer>
</body>

</html>


