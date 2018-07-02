<?php
include '../dbConnection.php';

// Dapatkan value dari updateMhsForm.php
$nim = $_POST["nim_mhs"];
$id = $_POST["id_mhs"];
$nama = $_POST["nama_mhs"];
$tmp_lahir = $_POST["tempat_lahir_mhs"];
$tgl_lahir = $_POST["tgl_lahir_mhs"];
$alamat = $_POST["alamat_mhs"];
$wali = $_POST["wali_mhs"];
$spp = $_POST["spp_mhs"];

$query = "UPDATE " .DB_TABLE_MHS. " SET nim_mhs='$nim', nama_mhs='$nama', tempat_lahir_mhs='$tmp_lahir', tgl_lahir_mhs='$tgl_lahir', alamat_mhs='$alamat', wali_mhs='$wali', spp_mhs='$spp' WHERE id_mhs=$id";

if(mysqli_query($con,$query)) {
    header("location: ../index.php");
} else {
    echo "Gagal";
}

mysqli_close($con);
?>