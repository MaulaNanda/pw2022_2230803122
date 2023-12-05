<?php
require 'functions.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM phpdasar WHERE id = $id")[0];

if(isset($_POST["submit"])){

    if(ubah($_POST) > 0 ){
        echo "
            <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Update Data Mahasiswa</title>
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
        <h1 style="font-family: 'Century Schoolbook'">Ubah Data Mahasiswa</h1>
        <p style="font-family: 'Century Schoolbook'">Silakan mengubah data di bawah</p> 
      </div>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$mhs["id"];?>">
        <input type="hidden" name="gambarlama" value="<?=$mhs["gambar"];?>">
    <table style="font-family: 'Century Schoolbook'">
        
        <tr> 
            <td><br>
            <label for="nama" >Nama </label>
            </td>
            <td><br>:</td>
            <td><br>
            <input type="text" name="nama" requaired value="<?=$mhs["nama"]?>"
            class="form-control" style="background-color: beige; border-color: rgb(148, 90, 42);
            width : 400px"></td>
        </tr> 
        <tr>
            <td><br>
            <label for="nrp" >NRP </label>
            </td>
            <td><br>:</td>
            <td><br><input type="text" name="nrp" required value="<?=$mhs["nrp"]?>"
            class="form-control" style="background-color: beige; border-color: rgb(148, 90, 42);
            width : 400px"></td></td>
        </tr>  
        <tr>
        <td><br>
            <label for="email" >Email </label>
            </td>
            <td><br>:</td>
            <td><br><input type="text" name="email" required value="<?=$mhs["email"]?>"
            class="form-control" style="background-color: beige; border-color: rgb(148, 90, 42);
            width : 400px"></td>
        </tr> 
        <tr>
        <td><br>
            <label for="jurusan" >Jurusan </label>
            </td>
            <td><br>:</td>
            <td><br><input type="text" name="jurusan" required value="<?=$mhs["jurusan"]?>"
            class="form-control" style="background-color: beige; border-color: rgb(148, 90, 42);
            width : 400px"></td>
        </tr>   
        <tr>    
            <td><br>
                <label for="gambar" >Gambar </label>
                </td>
                <td><br>:</td>
            <td><br><input type="file" name="gambar" id="gambar"></td>
        <tr>
            <td></td>
            <td></td>
            <td><img src="img/<?= $mhs['gambar'];?>" width="80"></td><br>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="submit" class="form-control" 
            style="background-color: beige; border-color: rgb(148, 90, 42); width : 150px">Update Data</button></td>
        </tr>     
        </table>
        <br><br>
    </form>
    </center>
</body>
</html>