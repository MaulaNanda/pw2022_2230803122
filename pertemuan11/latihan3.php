<?php
$mahasiswa = 
    ["joni","123456","sistem informasi","joni@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <ul>
        <li><?= $mahasiswa[0];?></li>
        <li><?= $mahasiswa[1];?></li>
        <li><?= $mahasiswa[2];?></li>
        <li><?= $mahasiswa[3];?></li>
    </ul>
</body>
</html>