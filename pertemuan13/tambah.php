<?php
require 'functions.php';
$conn = mysqli_connect("localhost","root","","phpdasar");
if(isset($_POST["submit"])){

 

    if(tambah($_POST) > 0 ){
        echo "
            <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Tambah Data Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <style>
        body{
            background-color: darkkhaki;
        }
       
        </style>
</head>

<body>
    <center>
    <div class="jumbotron text-center" style="background-color: beige; padding: 20px;">
        <h1 style="font-family: 'Century Schoolbook'">Tambah Data Mahasiswa</h1>
        <p style="font-family: 'Century Schoolbook'">Silakan menambahkan data di bawah</p> 
      </div>

    <form action="" method="post" enctype="multipart/form-data">
    <table style="font-family: 'Century Schoolbook'">
        
            <tr>
                <td><br>
                <label for="nama" >Nama </label>
                </td>
                <td><br>:</td>
                <td><br>
                <input type="text" name="nama" required class="form-control" 
                style="background-color: beige; border-color: rgb(148, 90, 42); width : 400px">
                </td>
            </tr>
            <tr>
            <td><br>
                <label for="nrp" >NRP </label>
                </td>
                <td><br>:</td>
                <td><br>
                <input type="text" name="nrp" required class="form-control" 
                style="background-color: beige; border-color: rgb(148, 90, 42); width : 400px">
                </td>
            </tr>
            <tr>
                <td><br>
                <label for="email" >Email </label>
                </td>
                <td><br>:</td>
                <td><br>
                <input type="text" name="email" required class="form-control" 
                style="background-color: beige; border-color: rgb(148, 90, 42); width : 400px">
                </td>
            </tr>
            <tr>
            <td><br>
                <label for="jurusan" >Jurusan </label>
                </td>
                <td><br>:</td>
                <td><br>
                <input type="text" name="jurusan" required class="form-control" 
                style="background-color: beige; border-color: rgb(148, 90, 42); width : 400px">
                </td>
            <tr>
            <td><br>
                <label for="gambar" >Gambar </label>
                </td>
                <td><br>:</td>
                <td><br>
                <input type="file" name="gambar" required >
                </td>
            </tr>
            <tr>
                <td><br></td>
                <td><br></td>
                <td>
                <button type="submit" name="submit" class="form-control" 
                style="background-color: beige; border-color: rgb(148, 90, 42); width : 150px">Tambah Data</button>
                </td>
            </tr>
        
    </table>
    </form>
    </center>
</body>
</html>