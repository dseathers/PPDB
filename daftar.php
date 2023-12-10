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
        <link rel="stylesheet" type="text/css" href="../assets/CSS/daftar.css">
    </head>
    <body>
        <h1>Halaman daftar</h1>
        <form action="daftar.php" method="post" name="daftar">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>
    
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>
    
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
    
            <label><b>Jenis Kelamin</b></label><br>
            <input type="radio" name="jenis_kelamin" value="Pria" />Pria<input type="Radio" name="jenis_kelamin" value="Perempuan"/>Perempuan<br><br>
    
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="nisn">NISN</label>
            <input type="number" id="nisn" name="nisn" required>

            <label for="notelp">Nomor Telepon</label>
            <input type="number" id="notelp" name="notelp" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <div class="tombol">
                <li><a href="../index.html">KEMBALI</a></li>
                <input type="submit" value="Daftar" name="submit">
            </div>
        </form>
        <?php
    if(isset($_POST['submit'])){
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempatLahir = $_POST['tempat_lahir'];
        $tanggalLahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $notelp = $_POST['notelp'];
        $email = $_POST['email'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO data_siswa (nisn, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat_rumah, no_telp, email) VALUES ('$nisn','$nama','$jenis_kelamin','$tempatLahir','$tanggalLahir','$alamat','$notelp','$email')");

        echo "Berhasil menambahkan peserta";
    }

?>
        
    </body>
</html>