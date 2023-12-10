
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
        <link rel="stylesheet" type="text/css" href="../assets/CSS/hasilseleksi.css">
        <nav>
            <img src="../assets/image/logo.png">
            <ul class="navbar">
                <li class="navbarli"><a class="navbara" href="#">FAQ</a></li>
                <li class="navbarli"><a class="navbara" href="hasil_seleksi.php">HASIL SELEKSI</a></li>
                <li class="navbarli"><a class="navbara" href="pendaftaransekolah.php">DAFTAR KE SEKOLAH</a></li>
                <li class="navbarli"><a class="navbara" href="../main/akunsaya.php">AKUN SAYA</a></li>
            </ul>
        </nav>
    </head>
    <body>
        
        <h1>Hasil Seleksi PPDB</h1>
        <form>
        <h2>Jakarta</h2>
        <ul>
            <li><a href="../main/daftarSekolah/smpn1jakarta.php">SMPN 1 JAKARTA</a> | <a href="../main/daftarSekolah/smpn2jakarta.php">SMPN 2 JAKARTA</a> | <a href="../main/daftarSekolah/smpn3jakarta.php">SMPN 3 JAKARTA</a> | <a href="../main/daftarSekolah/smpn4jakarta.php">SMPN 4 JAKARTA</a> | <a href="../main/daftarSekolah/smpn5jakarta.php">SMPN 5 JAKARTA</a></li>
        </ul>
        <h2>Bogor</h2>
        <ul>
            <li><a href="../main/daftarSekolah/smpn1bogor.php">SMPN 1 BOGOR</a> | <a href="../main/daftarSekolah/smpn2bogor.php">SMPN 2 BOGOR</a> | <a href="../main/daftarSekolah/smpn3bogor.php">SMPN 3 BOGOR</a> | <a href="../main/daftarSekolah/smpn4bogor.php">SMPN 4 BOGOR</a> | <a href="../main/daftarSekolah/smpn5bogor.php">SMPN 5 BOGOR</a></li>
        </ul>
        <h2>Depok</h2>
        <ul>
            <li><a href="../main/daftarSekolah/smpn1depok.php">SMPN 1 DEPOK</a> | <a href="../main/daftarSekolah/smpn2depok.php">SMPN 2 DEPOK</a> | <a href="../main/daftarSekolah/smpn3depok.php">SMPN 3 DEPOK</a> | <a href="../main/daftarSekolah/smpn4depok.php">SMPN 4 DEPOK</a> | <a href="../main/daftarSekolah/smpn5depok.php">SMPN 5 DEPOK</a></li>
        </ul>
        <h2>Tangerang</h2>
        <ul>
            <li><a href="../main/daftarSekolah/smpn1tangerang.php">SMPN 1 TANGERANG</a> | <a href="../main/daftarSekolah/smpn2tangerang.php">SMPN 2 TANGERANG</a> | <a href="../main/daftarSekolah/smpn3tangerang.php">SMPN 3 TANGERANG</a> | <a href="../main/daftarSekolah/smpn4tangerang.php">SMPN 4 TANGERANG</a> | <a href="../main/daftarSekolah/smpn5tangerang.php">SMPN 5 TANGERANG</a></li>
        </ul>
        <h2>Bekasi</h2>
        <ul>
            <li><a href="../main/daftarSekolah/smpn1bekasi.php">SMPN 1 BEKASI</a> | <a href="../main/daftarSekolah/smpn2bekasi.php">SMPN 2 BEKASI</a> | <a href="../main/daftarSekolah/smpn3bekasi.php">SMPN 3 BEKASI</a> | <a href="../main/daftarSekolah/smpn4bekasi.php">SMPN 4 BEKASI</a> | <a href="../main/daftarSekolah/smpn5bekasi.php">SMPN 5 BEKASI</a></li>
        </ul>
    </form>
    </body>
</html>