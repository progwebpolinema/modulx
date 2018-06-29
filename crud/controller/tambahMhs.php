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

$query = "INSERT INTO " .DB_TABLE_MHS. " (nim_mhs, nama_mhs, tempat_lahir_mhs, tgl_lahir_mhs, alamat_mhs, wali_mhs, spp_mhs) VALUES ('$nim', '$nama', '$tmp_lahir', '$tgl_lahir', '$alamat', '$wali', '$spp')";

if(mysqli_query($con,$query)) {
    header("location: ../index.php");
} else {
    echo "Gagal";
}
?>