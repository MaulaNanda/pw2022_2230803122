<?php
$mahasiswa =
[
    [
    "nama" => "joni",
    "nim" => "123456",
    "jurusan" => "sistem informasi",
    "email" => "joni@gmail.com",
    ],
    [
    "nama" => "joni",
    "nim" => "123456",
    "jurusan" => "sistem informasi",
    "email" => "joni@gmail.com", 
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs):?>
        <ul>
            <li>nama :<?=$mhs["nama"];?></li>
            <li>nim :<?=$mhs["nim"];?></li>
            <li>jurusan :<?=$mhs["jurusan"];?></li>
            <li>email :<?=$mhs["email"];?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>