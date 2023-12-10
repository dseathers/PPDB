<?php
session_start();

// Pastikan ada sesi dan data POST yang dibutuhkan
if (!isset($_SESSION['nisn'])) {
    header("Location: login.php");
    exit();
}

$nisn = $_SESSION['nisn'];
$nama = $_SESSION['nama'];

include_once("config.php");

if (isset($_POST['submit'])) {
    $mtk = $_POST['mtk'];
    $bindo = $_POST['bindo'];
    $ipa = $_POST['ipa'];

    // Hitung rata-rata nilai
    $rata_rata = ($mtk + $bindo + $ipa);
    $nilai = round($rata_rata, 2);

    // Lakukan query untuk menambahkan nilai
    $result = mysqli_query($mysqli, "INSERT INTO smpn5depok (nisn, nama, mtk, bindo, ipa, nilai) VALUES ('$nisn', '$nama', '$mtk','$bindo','$ipa','$nilai')");

    if ($result) {
        echo "Berhasil menambahkan nilai";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>


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
        body{
            background-color: #3399ff;
            font-family: arial;
            padding-top: 80px;
        }

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
        h1 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
        }
        form {
            max-width: 200px;
            margin: 20px auto;
            padding: 20px;
            height: auto;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: bold;
        }

        input[type="number"],
        input[type="password"],
        input[type="text"]
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease;
            border-radius: 8px;
        }

        input[type="submit"], input[type="reset"] {
            width: 100%;
            padding: 10px;
            background-color: #3399ff;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 8px 0;
            margin-right: 5px;
            font-weight: bold;
        }
    </style>
    <body>

    <form action="smpn5depokinputnilai.php" method="post" name="daftar">
            <label for="nisn">NISN</label>
            <input type="number" id="nisn" name="nisn" value="<?php echo $nisn;?>" disabled>
            
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" value="<?php echo $nama;?>" disabled>
            
            <label for="mtk">MATEMATIKA</label>
            <input type="number" id="mtk" name="mtk" required>
            
            <label for="bindo">BAHASA INDONESIA</label>
            <input type="number" id="bindo" name="bindo" required>
            
            <label for="ipa">IPA</label>
            <input type="number" id="ipa" name="ipa" required>
            
            <div class="tombol">
                <input type="submit" value="Daftar" name="submit">
            </div>
        </form>

    </body>
</html>