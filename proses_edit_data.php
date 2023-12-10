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

// Periksa apakah formulir untuk data ibu disubmit
if (isset($_POST['submit_ibu'])) {
    // Ambil data dari formulir
    $alamat_ibu = $_POST['nama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $agama_ibu = $_POST['agama_ibu'];
    $email_ibu = $_POST['email_ibu'];
    $telp_ibu = $_POST['telp_ibu'];

    // Lakukan query untuk mengupdate data ibu
    $queryIbu = "UPDATE data_ibu SET alamat_ibu='$alamat_ibu', pekerjaan_ibu='$pekerjaan_ibu', agama_ibu='$agama_ibu', email_ibu='$email_ibu', no_telp_ibu='$telp_ibu' WHERE nisn='$nisn'";

    // Eksekusi query
    $resultIbu = $conn->query($queryIbu);

    // Periksa hasil query dan redirect sesuai kebutuhan
    if ($resultIbu) {
        header("Location: akunsaya.php");
        exit();
    } else {
        echo "Error updating data ibu: " . $conn->error;
        exit();
    }
}

// Tutup koneksi
$conn->close();
?> 
