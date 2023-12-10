<?php
session_start();
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "pepdb");

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$nisn = $_POST['nisn'];
$password = $_POST['password'];

// Lakukan query ke database
$query = "SELECT users.*, data_ayah.*, data_ibu.*
FROM users
LEFT JOIN data_ayah ON users.nisn = data_ayah.nisn
LEFT JOIN data_ibu ON users.nisn = data_ibu.nisn
WHERE users.nisn = '$nisn' AND users.PASSWORD = '$password'";
$result = $conn->query($query);

// Periksa hasil query
if ($result->num_rows > 0) {
    // Login berhasil
    $row = $result->fetch_assoc();
    $_SESSION['nisn'] = $row['nisn'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['tanggal_lahir'] = $row['tanggal_lahir'];
    $_SESSION['tempat_lahir'] = $row['tempat_lahir'];

    // Data Ayah
    $_SESSION['nama_ayah'] = $row['nama_ayah'];
    $_SESSION['nik_ayah'] = $row['nik_ayah'];
    $_SESSION['alamat_ayah'] = $row['alamat_ayah'];
    $_SESSION['pekerjaan_ayah'] = $row['pekerjaan_ayah'];
    $_SESSION['agama_ayah'] = $row['agama_ayah'];
    $_SESSION['email_ayah'] = $row['email_ayah'];
    $_SESSION['no_telp_ayah'] = $row['no_telp_ayah'];

    // Data ibu
    $_SESSION['nama_ibu'] = $row['nama_ibu'];
    $_SESSION['nik_ibu'] = $row['nik_ibu'];
    $_SESSION['alamat_ibu'] = $row['alamat_ibu'];
    $_SESSION['pekerjaan_ibu'] = $row['pekerjaan_ibu'];
    $_SESSION['agama_ibu'] = $row['agama_ibu'];
    $_SESSION['email_ibu'] = $row['email_ibu'];
    $_SESSION['no_telp_ibu'] = $row['no_telp_ibu'];

    header("Location: index.php");
    exit();
} else {
    $_SESSION['login_error'] = "NISN or password is incorrect.";
    header("Location: login.php");
    exit();
}

// Tutup koneksi
$conn->close();
?>
