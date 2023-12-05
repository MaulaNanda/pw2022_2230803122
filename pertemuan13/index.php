<?php
require 'functions.php';
$phpdasar = query("SELECT * FROM phpdasar");

if(isset($_POST["cari"])){
    $phpdasar = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: beige;
        }
        th{
            text-align : center;
        }
       table{
            font-family: Century Schoolbook;
       }
        </style>
</head>
<body>
<div class="jumbotron text-center" style="background-color: darkkhaki; padding: 20px;">
        <h1 style="font-family: 'Century Schoolbook'">Data Mahasiswa</h1>
        <a href="tambah.php" style="font-family: 'Century Schoolbook'">Tambah Data Mahasiswa</a>
      </div>
   
    <center>
    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus
        placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari?</button>
    </form>

    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr style = "background-color : darkkhaki;">
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i=1;?>
        <?php foreach($phpdasar as $row):?>
        <tr>
        <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick ="return confirm ('Anda yakin ingin menghapus data?');">hapus</a>
            </td>
            <td><center><img src="img/<?= $row["gambar"];?>" width="50"></center></td>
            <td><?= $row["nrp"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <br><br>
   </center>
   
</body>
</html>