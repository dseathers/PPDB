<?php
session_start();
if (!isset($_SESSION['nisn']) || !isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit();
}
include_once("config.php");

// Pastikan variabel-variabel ini sudah tersedia
$nisn = isset($_SESSION['nisn']) ? $_SESSION['nisn'] : '';
$nama_user = isset($_SESSION['nama']) ? $_SESSION['nama'] : '';
$tanggal_lahir = isset($_SESSION['tanggal_lahir']) ? $_SESSION['tanggal_lahir'] : '';
$tempat_lahir = isset($_SESSION['tempat_lahir']) ? $_SESSION['tempat_lahir'] : '';

//data ayah
$nama_ayah = isset($_SESSION['nama_ayah']) ? $_SESSION['nama_ayah'] : '';
$nik_ayah = isset($_SESSION['nik_ayah']) ? $_SESSION['nik_ayah'] : '';
$alamat_ayah = isset($_SESSION['alamat_ayah']) ? $_SESSION['alamat_ayah'] : '';
$pekerjaan_ayah = isset($_SESSION['pekerjaan_ayah']) ? $_SESSION['pekerjaan_ayah'] : '';
$agama_ayah = isset($_SESSION['agama_ayah']) ? $_SESSION['agama_ayah'] : '';
$email_ayah = isset($_SESSION['email_ayah']) ? $_SESSION['email_ayah'] : '';
$telp_ayah = isset($_SESSION['no_telp_ayah']) ? $_SESSION['no_telp_ayah'] : '';

//data ibu
$nama_ibu = isset($_SESSION['nama_ibu']) ? $_SESSION['nama_ibu'] : '';
$nik_ibu = isset($_SESSION['nik_ibu']) ? $_SESSION['nik_ibu'] : '';
$alamat_ibu = isset($_SESSION['alamat_ibu']) ? $_SESSION['alamat_ibu'] : '';
$pekerjaan_ibu = isset($_SESSION['pekerjaan_ibu']) ? $_SESSION['pekerjaan_ibu'] : '';
$agama_ibu = isset($_SESSION['agama_ibu']) ? $_SESSION['agama_ibu'] : '';
$email_ibu = isset($_SESSION['email_ibu']) ? $_SESSION['email_ibu'] : '';
$telp_ibu = isset($_SESSION['no_telp_ibu']) ? $_SESSION['no_telp_ibu'] : '';
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="assets/CSS/index.css">
    <nav>
            <a href="../index.php">
            <img src="../assets/image/logo.png" a href="../index.php">
            </a>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="hasil_seleksi.php">HASIL SELEKSI</a></li>
                <li><a href="pendaftaransekolah.php">DAFTAR KE SEKOLAH</a></li>
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
        }

        .image-content {
            padding: 40px;
        }
        img{
            position: fixed;
            bottom: 410px;
            left: 390px;
            height: auto;
            width: 140px;
        }

        .biodata {
            max-width: 200px;
            margin: 20px auto;
            padding: 20px;
            position: absolute;
            left: 350px;
            bottom: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .biosiswa {
            display: block;
            margin-bottom: 2px;
            color: #555;
            font-size: 12px;;
            font-weight: bold;
        }

        .siswa {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            background: #D9D9D9;
            border-radius: 3px;
            transition: border-color 0.3s ease;
            border-radius: 8px;
        }

        .siswa[readonly] {
        background-color: #D9D9D9; /* Ganti warna background sesuai kebutuhan */
        color: #555; /* Ganti warna teks sesuai kebutuhan */
        cursor: not-allowed;
    }

    .ortu{
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            position: absolute;
            left: 620px;
            bottom: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .labortu{
        display: block;
        margin-bottom: 2px;
        color: #555;
        font-size: 12px;;
        font-weight: bold;
    }

    .inportu{
            width: 150x;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            background: #D9D9D9;
            border-radius: 3px;
            transition: border-color 0.3s ease;
            border-radius: 8px;
    }

    .inportu[readonly]{
        cursor: not-allowed;
    }

    .ibu{
        width: 190px;
            margin: 20px auto;
            padding: 20px;
            position: absolute;
            left: 850px;
            bottom: 20px;
            background-color: #fff;
            border-radius: 20px;
            /*box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);*/
    }

    .labibu{
        display: block;
        margin-bottom: 2px;
        color: #555;
        font-size: 12px;;
        font-weight: bold;
    }

    .inpibu{
            width: 150x;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            background: #D9D9D9;
            border-radius: 3px;
            transition: border-color 0.3s ease;
            border-radius: 8px;
    }

    .liedt {
        list-style-type: none;
        margin: 0px;
    }

    /* Gaya untuk tautan (a) dalam elemen daftar */
    .aedt {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        /*position: fixed;
        right: 500px;
        top:600px;*/
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        background-color: #3498db;
        color: #fff;
        border: 2px solid #fff;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Efek hover pada tautan */
    .aedt:hover {
        background-color: #2980b9;
    }

    .lilogout{
        list-style-type: none;
        margin: 0px;
    }

    .alogout{
        display: inline-block;
        padding: 10px 10px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        background-color: #3498db;
        color: #fff;
        border: 2px solid #fff;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .container-button {
        display: flex;
        justify-content: space-between; /* Menyusun elemen secara horizontal dengan spasi di antara mereka */
        margin-top: 0px; /* Atur margin atas sesuai kebutuhan */
    }

    </style>
    <body>
    <div class="image-content">
        <img src="../assets/image/fotosiswa.png">
        <form class="biodata" action="akunsaya.php">

        <label class="biosiswa" for="nama">Nama lengkap</label>
        <input class="siswa" type="text" name="nama" value="<?php echo $nama_user; ?>" disabled>

        <label class="biosiswa" for="nisn">NISN</label>
        <input class="siswa" type="number" name="nisn" value="<?php echo $nisn; ?>" disabled>

        <label class="biosiswa" for="tmplahir">Tempat lahir</label>
            <input class="siswa" type="text" name="tmplahir" value="<?php echo $tempat_lahir; ?>" disabled>

            <label class="biosiswa" for="tgllahir">Tanggal lahir</label>
            <input class="siswa" type="date" name="tgllahir" value="<?php echo $tanggal_lahir; ?>" disabled>

            <div class="container-button">
                <li class="lilogout">
                    <a class="alogout" href="../logout.php">Logout</a>
                </li>
                
                <li class="liedt">
                    <a class="aedt" href="pilihanedit.php">EDIT</a>
                </li>
            </div>
        </form>

        </form>

        <form class="ortu"action="akunsaya.php">

            <label class="labortu" for="namaayah">Nama ayah</label>
            <input class="inportu" type="text" name="namaayah" value="<?php echo $nama_ayah; ?>" disabled>

            <label class="labortu" for="nikayah">NIK ayah</label>
            <input class="inportu" type="number" name="nikayah" value="<?php echo $nik_ayah; ?>" disabled>

            <label class="labortu" for="alamatayah">Alamat ayah</label>
            <input class="inportu" type="text" name="alamatayah" value="<?php echo $alamat_ayah; ?>" disabled>

            <label class="labortu" for="jobayah">Pekerjaan ayah</label>
            <input class="inportu" type="text" name="jobayah" value="<?php echo $pekerjaan_ayah; ?>" disabled>

            <label class="labortu" for="agamaayah">Agama ayah</label>
            <input class="inportu" type="text" name="agamaayah" value="<?php echo $agama_ayah; ?>" disabled>

            <label class="labortu" for="emailayah">E-mail ayah</label>
            <input class="inportu" type="email" name="emailayah" value="<?php echo $email_ayah; ?>" disabled>

            <label class="labortu" for="telpayah">No.telp ayah</label>
            <input class="inportu" type="number" name="ayah" value="<?php echo $telp_ayah; ?>" disabled>


        </form>

        <form class="ibu"action="akunsaya.php">

            <label class="labibu" for="namaibu">Nama ibu</label>
            <input class="inpibu" type="text" name="namaibu" value="<?php echo $nama_ibu; ?>" disabled>

            <label class="labibu" for="nikibu">NIK ibu</label>
            <input class="inpibu" type="number" name="nikibu" value="<?php echo $nik_ibu; ?>" disabled>

            <label class="labibu" for="alamatibu">Alamat ibu</label>
            <input class="inpibu" type="text" name="alamatibu" value="<?php echo $alamat_ibu; ?>" disabled>

            <label class="labibu" for="jobibu">Pekerjaan ibu</label>
            <input class="inpibu" type="text" name="jobibu" value="<?php echo $pekerjaan_ibu; ?>" disabled>

            <label class="labibu" for="agamaibu">Agama ibu</label>
            <input class="inpibu" type="text" name="agamaibu" value="<?php echo $agama_ibu; ?>" disabled>

            <label class="labibu" for="emailibu">E-mail ibu</label>
            <input class="inpibu" type="email" name="emailibu" value="<?php echo $email_ibu; ?>" disabled>

            <label class="labibu" for="telpibuh">No.telp ibu</label>
            <input class="inpibu" type="number" name="telpibu" value="<?php echo $telp_ibu; ?>" disabled>

            </form>


    </div>
    </body>
</html>