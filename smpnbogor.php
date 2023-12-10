<?php
session_start();

// Pastikan ada sesi dan data POST yang dibutuhkan
if (!isset($_SESSION['nisn'])) {
    header("Location: login.php");
    exit();
    
    $nisn = $_SESSION['nisn'];
    $nama_user = $_SESSION['nama'];
}
?>

<!DOCTYPE html>
<html>
    <head>
    <nav>
        <a href="../index.php">
            <img src="../assets/image/logo.png" a href="../index.php">
        </a>
        <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="hasil_seleksi.php">HASIL SELEKSI</a></li>
            <li><a href="pendaftaransekolah.php">DAFTAR SEKOLAH</a></li>
            <li><a href="akunsaya.php">AKUN SAYA</a></li>
        </ul>
        </nav>
    </head>
    <style>
        nav{
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 80px;
        }
        nav img{
            width: 70px;
            height: auto;
            position: absolute;
            top: 0;
            margin-left: 10px;
            margin-top: 5px;
            left: 0;
        }

        ul {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 50px;
        }

        li{
            list-style-type: none;
            margin: 20px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        a:hover{
            font-weight: bold;
        }

        body{
            background-color: #3399ff;
            font-family:arial;
            padding-top: 140px;
        }

        .btn-edit {
            display: flex;
            width: 200px;
            height: 250px;
            flex-direction: column;
            align-items: center; /* Pusatkan elemen secara horizontal */
            text-align: center;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            background-color: #1B608D;
            color: #fff;
            border: 2px solid #2980b9;
            border-radius: 15px;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn-edit:hover {
            background-color: #164370;
        }

        .icon {
            width: 170px; /* Sesuaikan ukuran ikon */
            height: auto; /* Biarkan tinggi mengikuti proporsi asli */
            margin-top:20px;
            margin-bottom: 30px; /* Atur spasi antara ikon dan teks */
        }

        .container-button{
            display: flex;
            padding:10px;
            margin: 10px;
            justify-content: center;
            margin-top: 0px;
        }
        
        .container-button-2{
            display: flex;
            padding:10px;
            margin: 10px;
            justify-content: center;
            margin-top: 0px;
        }
    </style>
    <body>
        
        <div class="container-button">
            <li class="liibu">
                <a href="smpn1bogorinputnilai.php" class="btn-edit"><img src="../assets/image/lambangbogor0.png" alt="Edit Icon" class="icon">SMPN 1 BOGOR</a>
            </li>
            <li class="liibu">
                <a href="smpn2bogorinputnilai.php" class="btn-edit"><img src="../assets/image/lambangbogor-1.png" alt="Edit Icon" class="icon">SMPN 2 BOGOR</a>
            </li>
            <li class="liibu">
                <a href="smpn3bogorinputnilai.php" class="btn-edit"><img src="../assets/image/lambangbogor-2.png" alt="Edit Icon" class="icon">SMPN 3 BOGOR</a>
            </li>
        </div>
        <div class="container-button-2">
            <li class="liibu">
                <a href="editdataibu.php" class="btn-edit"><img src="../assets/image/lambangbogor-3.png" alt="Edit Icon" class="icon">SMPN 4 BOGOR</a>
            </li>
            <li class="liibu">
                <a href="editdataayah.php" class="btn-edit"><img src="../assets/image/lambangbogor-4.png" alt="Edit Icon" class="icon">SMPN 5 BOGOR</a>
            </li>
        </div>
    </body>
</html>