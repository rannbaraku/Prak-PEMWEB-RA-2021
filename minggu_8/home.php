<?php

session_start();
if (!isset($_SESSION['userID'])) {
    header('Location:index.php');
    die();
} ?>
<?php
require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();
$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/another.css">
    <style>
    </style>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/home.css">

    <!--link untuk font yang saya gunakan-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 

</head>

<body>
    <div class="header">
    <h1 align="center">Keluh Kesah Praktikum Pemrogaman Web</h1>
    <p align="center">Hai, <?php echo $_SESSION['nama']; ?></p>
    <br><form action="logout.php">
        <button class="tombol" type="submit" name="">logout</button>
    </form><br>
    <p>Merupakan halaman yang dibuat untuk memenuhi tugas praktikum terakhir.</p>
    <p>Saya tidak banyak melakukan modifikasi pada website, namun website ini</p>
    <p>akan berisi keluh kesah saya selama praktikum</p><br><br>
    <p>Terimakasih para asprak :)</p><br>




    </div>

    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id'] ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck"></div>
        </aside>
    </section>

    <?php //peletakan script berada di bawah 
    if (!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes') {
        echo '<script src="./assets/iklan/iklan.js"></script>';
    }
    ?>

    <script src="./assets/home.js"></script>
</body>

</html>