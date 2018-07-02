<?php
include '../dbConnection.php';

// Dapatkan value dari tambahMhsForm.php
$nim = $_POST["nim_mhs"];
$nama = $_POST["nama_mhs"];
$tmp_lahir = $_POST["tempat_lahir_mhs"];
$tgl_lahir = $_POST["tgl_lahir_mhs"];
$alamat = $_POST["alamat_mhs"];
$wali = $_POST["wali_mhs"];
$spp = $_POST["spp_mhs"];

$queryCheck = "SELECT * FROM " .DB_TABLE_MHS. "WHERE id_mhs=$nim";
$resultCheck = mysqli_query($con, $queryCheck);

$queryInsert = "INSERT INTO " .DB_TABLE_MHS. " (nim_mhs, nama_mhs, tempat_lahir_mhs, tgl_lahir_mhs, alamat_mhs, wali_mhs, spp_mhs) VALUES ('$nim', '$nama', '$tmp_lahir', '$tgl_lahir', '$alamat', '$wali', '$spp')";

// Check apakah data sudah ada tau belum berdasarkan NIM
// Nilai return echo akan dibaca oleh fungsi tambahMhs() pada js/script.gs
if(mysqli_num_rows($resultCheck) > 0){
    // return 0 jika sudah ada
    echo 0;
} else {
    // Lakukan insert ke database dan return 1
    mysqli_query($con, $queryInsert);
    echo 1;
}

mysqli_close($con);

?>