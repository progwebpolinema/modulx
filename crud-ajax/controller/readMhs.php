<?php
include '../dbConnection.php';

$status = 1;

$data = '
<table class="table mt-2" id="records">
  <thead>
    <tr>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Wali</th>
      <th>SPP</th>
      <th></th>
    </tr>
  </thead>
';

$query = "SELECT * FROM " .DB_TABLE_MHS;
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $data .= '<tbody><tr>
        <td>'. $row["nim_mhs"] . '</td>
        <td>' . $row["nama_mhs"] . '</td>
        <td>' . $row["tempat_lahir_mhs"] . '</td>
        <td>' . $row["tgl_lahir_mhs"] . '</td>
        <td>' . $row["alamat_mhs"] . '</td>
        <td>' . $row["wali_mhs"] . '</td>
        <td>' . $row["spp_mhs"] . '</td>
        <td>
            <button class="btn btn-warning mr-2">Update</button>
            <button class="btn btn-danger" >Hapus</button>
        </td>
        </tr></tbody>';
    }
} else {
    $data .= '<tbody><tr><td colspan="9">Tidak Ada Data Mahasiswa</td></tr></tbody>';
}
  
$data .= '</table>';
echo $data;
?>