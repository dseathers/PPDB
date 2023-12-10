<?php
session_start();
if (!isset($_SESSION['nisn']) || !isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit();
}

include_once("config.php");

if (!isset($_SESSION['nama_ayah']) || !isset($_SESSION['nama_ibu'])) {
    // Jika tidak, redirect ke halaman akunsaya.php atau halaman lainnya
    header("Location: akunsaya.php");
    exit();
}

//data ibu
$nama_ibu = $_SESSION['nama_ibu'];
$nik_ibu = $_SESSION['nik_ibu'];
$alamat_ibu = $_SESSION['alamat_ibu'];
$pekerjaan_ibu = $_SESSION['pekerjaan_ibu'];
$agama_ibu = $_SESSION['agama_ibu'];
$email_ibu = $_SESSION['email_ibu'];
$telp_ibu = $_SESSION['no_telp_ibu'];
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
            <li><a href="#">DOKUMEN</a></li>
            <li><a href="akunsaya.php">AKUN SAYA</a></li>
        </ul>
        </nav>
    </head>
    <script>alert("Setelah edit data silahkan Logout dan Login ulang untuk melihat pembaruan data pada halaman akun saya")</script>
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

        form {
            width: 500px;
            margin: 0px auto;
            padding: 20px;
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

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        select {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease;
            border-radius: 8px;
        }

        input[type="submit"] {
            width: 20%;
            padding: 10px;
            background-color: #3399ff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 8px 0;
            margin-right: 5px;
            font-weight: bold;
        }
    </style>
    <body>
    <form action="proses_edit_data_ibu.php" method="post">
                <label for="alamat_ibu">Alamat ibu</label>
                <input type="text" name="nama_ibu" value="<?php echo $alamat_ibu ; ?>">

                <label for="pekerjaan_ibu">Pekerjaan ibu</label>
                <input type="text" name="pekerjaan_ibu" value="<?php echo $pekerjaan_ibu ; ?>" >

                <label for="agama_ibu">Agama ibu</label>
                <input type="text" name="agama_ibu" value="<?php echo $agama_ibu ; ?>" >

                <label for="email_ibu">E-mail ibu</label>
                <input type="email" name="email_ibu" value="<?php echo $email_ibu ; ?>" >

                <label for="telp_ibu">NO.Telp ibu</label>
                <input type="number" name="telp_ibu" value="<?php echo $telp_ibu ; ?>" >

                <input type="submit" name="submit_ibu"value="SIMPAN">

            </form>
    </body>
</html>