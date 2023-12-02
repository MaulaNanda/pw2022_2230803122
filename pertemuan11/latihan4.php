<?php
$mahasiswa = [
    ["joni","123456","sistem informasi","joni@gmail.com"],
    ["budi","65413","teknik informatika","budi@gmail.com"],
    ["angga","789654","ilmu komputer","angga@gmail.com"],
    ["rio","896546","teknik jaringan","rio@gmail.com"]  
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
        <li><?= $mhs[0];?></li>
        <li><?= $mhs[1];?></li>
        <li><?= $mhs[2];?></li>
        <li><?= $mhs[3];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>