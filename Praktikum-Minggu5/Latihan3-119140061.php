<!DOCTYPE html>
<html>

<?php
    // variabel penghitung jumlah bilangan prima
    $jumlah=0;

    //fungsi mencari bilangan prima
    function prime(){
    //range pencarian
    for($i=1;$i<=50;$i++){  
            $temp = 0; 
            //faktor pencarian
            for($j=1;$j<=$i;$j++){ 
                    //bilangan prima tidak habis dibagi 0
                  if($i % $j==0){ 
                        $temp++; }
            }
          //bilangann prima habis dibagi dirinya sendiri
            if($temp==2){
                echo $i .'&nbsp &nbsp ';
                echo "\t";

                global $jumlah;
                $jumlah++;
            } 
        }
    } 

    //fungsi menampilkan jumlah blangan prima
    function total(){
        global $jumlah;
        echo $jumlah;
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

    <!-- Judul halaman -->
    <H1>Bilangan Prima </H1><br><br>

    <!-- konten utama -->    
    <div class="kotak">

    <!-- Pemanggilan fungsi mencetak bilangan prima apa saja pada range 1 -50 -->    
    <p>Berikut adalah bilangan prima dari 1 sampai 50</p><br>
    <?php echo prime();?>  
    
    <!-- Pemanggilan fungsi mencetak jumlah bilangan prima pada range 1 -50 -->    
    <br><br><p> Jumlah bilangan prima :   </p>   <?php echo total();?>  
    </div>

    <!-- footer halaman-->    
    <footer><p>Randi Baraku - 119140061</p></footer>
</body>


</html>
