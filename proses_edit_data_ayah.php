<?php
session_start();
include_once("config.php");

// Pastikan ada sesi dan data POST yang dibutuhkan
if (!isset($_SESSION['nisn'])) {
    header("Location: login.php");
    exit();
}

$nisn = $_SESSION['nisn'];

// Periksa apakah formulir untuk data ayah disubmit
if (isset($_POST['submit_ayah'])) {
    // Ambil data dari formulir
    $alamat_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $agama_ayah = $_POST['agama_ayah'];
    $email_ayah = $_POST['email_ayah'];
    $telp_ayah = $_POST['telp_ayah'];

    // Lakukan query untuk mengupdate data ayah
    $queryAyah = "UPDATE data_ayah SET alamat_ayah='$alamat_ayah', pekerjaan_ayah='$pekerjaan_ayah', agama_ayah='$agama_ayah', email_ayah='$email_ayah', no_telp_ayah='$telp_ayah' WHERE nisn='$nisn'";

    // Eksekusi query
    $resultAyah = $conn->query($queryAyah);

    // Periksa hasil query dan redirect sesuai kebutuhan
    if ($resultAyah) {
        header("Location: akunsaya.php");
        exit();
    } else {
        echo "Error updating data ayah: " . $conn->error;
        exit();
    }
}

// Tutup koneksi
$conn->close();
?> 
