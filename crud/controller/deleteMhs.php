<?php
include '../dbConnection.php';

// Dapatkan id dari index.php
$id = $_GET["id"];

$query = "DELETE FROM " . DB_TABLE_MHS . " WHERE id_mhs=$id";

if(mysqli_query($con,$query)) {
    header("location: ../index.php");
} else {
    echo "Gagal";
}
?>