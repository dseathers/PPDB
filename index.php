<?php
    session_start();
    if (!isset($_SESSION['nisn']) || !isset($_SESSION['nama'])) {
        header("Location: login.php");
        exit();
    }

    $nisn = $_SESSION['nisn'];
    $nama_user = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="assets/CSS/index.css">
        <nav>
            <img src="assets/image/logo.png">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="main/hasil_seleksi.php">HASIL SELEKSI</a></li>
                <li><a href="main/pendaftaransekolah.php">DAFTAR SEKOLAH</a></li>
                <li><a href="main/akunsaya.php">AKUN SAYA</a></li>
            </ul>
        </nav>
    </head>
    <style>
        nav img{
            margin-top: 6px;
        }
        h1{
            padding-top:90px;
            padding-left:50px;
        }
        p{
            padding-left:50px;
        }
    </style>
    <body>
        <div class="content-wrap">
            <div class="text-content">
                <h1>Selamat Datang, <?php echo $nama_user;?>!</h1>
            </div>
            <div class="parag">
                <p>NISN anda: <?php echo $nisn;?></p>
            </div>
            <div class="image-content">
                <img src="assets/image/fotosiswa.png">
            </div>
        </div>
    </body>
</html>