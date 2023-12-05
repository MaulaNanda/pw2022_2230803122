<?php
$conn = mysqli_connect("localhost","root","","phpdasar");


function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars ($data["nama"]);
    $nrp = htmlspecialchars ($data["nrp"]);
    $email =  htmlspecialchars ($data["email"]);
    $jurusan =  htmlspecialchars ($data["jurusan"]);

    $gambar =  upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO phpdasar
            VALUES
            ('','$nama','$nrp','$email','$jurusan','$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile =$_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName =$_FILES['gambar']['tmp_name'];

    if ($error === 4){
        echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }
    $ekstensigambarvalid =['jpg','jpeg','png'];
    $ekstensigambar = explode('.',$namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));
        if(!in_array($ekstensigambar, $ekstensigambarvalid)){
            echo "<script>
                alert('yang anda upload bukan gambar!');
                </script>";
            return false;
        }

    if($ukuranFile > 1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
    return false;
    }

    $namaFilebaru = uniqid();
    $namaFilebaru .='.';
    $namaFilebaru .=$ekstensigambar;
  

    move_uploaded_file($tmpName,'img/'.$namaFilebaru);
    return $namaFilebaru;
            
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM phpdasar WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars ($data["nama"]);
    $nrp = htmlspecialchars ($data["nrp"]);
    $email =  htmlspecialchars ($data["email"]);
    $jurusan =  htmlspecialchars ($data["jurusan"]);
    $gambarlama = htmlspecialchars ($data["gambarlama"]);

    if($_FILES['gambar']['error']=== 4){
        $gambar = $gambarlama;
    } else{
        $gambar =  upload();
    }
    

    $query = "UPDATE phpdasar SET 
            
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
        
        WHERE id = $id
    ";
            

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM phpdasar
        WHERE
        nama LIKE '%$keyword%' OR 
        nrp LIKE '%$keyword%' OR 
        email LIKE '%$keyword%' OR 
        jurusan LIKE '%$keyword%' 

    
    ";
    return query($query);
}

?>