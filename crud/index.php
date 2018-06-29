<?php
include 'dbConnection.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load jQuery -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Load Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/customIndex.css">
    <title>SIM Mahasiswa</title>
  </head>
  
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
          <img src="img/logo_poltek.png" alt="logoBrand" id="logoBrand">
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a href="#" class="nav-link active">Data Mahasiswa</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Data Dosen</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Data Karyawan</a></li>
              </ul>
          </div>
        </nav>
    </header>
    <main class="container" role="main">
        <div class="starter-template">
            <a class="btn btn-success" href="tambahMhsForm.php">Tambah</a>
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Wali</th>
                        <th>SPP</th>
                        <th>Aksi</th>
                        <!-- <th>
                          <a class="btn btn-warning" href="editMhsForm.php">Edit</a>
                          <a class="btn btn-danger" href="deleteMhs.php">Hapus</a>
                        </th> -->
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM ". DB_TABLE_MHS;
                    $result = mysqli_query($con, $query); // digunakan untuk melakukan query

                    // mysqli_num_rows($result) > 0 digunakan untuk melakukan
                    // pengecekan jumlah records hasil query lebih dari 0,
                    // atau dengan kata lain, ada data didalam tabel database
                    if(mysqli_num_rows($result) > 0){
                      // mysqli_fetch_assoc($result) digunakan untuk mendapatkan nilai hasil query
                      // dan disimpan kedalam variable $row
                      while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>" . $row["nim_mhs"] . "</td>"; // mengambil nilai dari kolom "nim_mhs"
                        echo "<td>" . $row["nama_mhs"] . "</td>";
                        echo "<td>" . $row["tempat_lahir_mhs"] . "</td>";
                        echo "<td>" . $row["tgl_lahir_mhs"] . "</td>";
                        echo "<td>" . $row["alamat_mhs"] . "</td>";
                        echo "<td>" . $row["wali_mhs"] . "</td>";
                        echo "<td>" . $row["spp_mhs"] . "</td>";
                        
                        // Kolom untuk tempat tombol edit dan delete
                        // Pada href kita harus mengirimkan id untuk kebutuhan filtering
                        // pada sat melakukan query
                        echo "<td>";
                        echo "<a class='btn btn-warning mr-2' href='updateMhsForm.php?id=".$row["id_mhs"]."'>Update</a>";
                        echo "<a class='btn btn-danger' href='controller/deleteMhs.php?id=".$row["id_mhs"]."'>Hapus</a>";
                        echo "</td>";
                        // 
                        
                        echo "</tr>";
                      }
                    }
                    mysqli_close($con); // Tutup koneksi ke database
                  ?>
                </tbody>
            </table>

        </div>
    </main>

  </body>
</html>
