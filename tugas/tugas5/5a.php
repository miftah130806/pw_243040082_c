<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Syalwa Ramadianti Nugraha",
        "nrp" => "243040074",
        "email" => "syalwarma21@gmail.com ",
        "jurusan" => "Teknik Informatika",
        "gambar" => "syalwa.jpg"
    ],

    [
        "nama" => "Reri Octa Romadhan",
        "nrp" => "243040075",
        "email" => "reri1427@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "reri.jpg"
    ],

    [
        "nama" => "Almadhan Abdurrofi ",
        "nrp" => "243040076",
        "email" => "almadhanadurrofi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "almadhan.jpg"
    ],

    [
        "nama" => "Fahreza putra Pratama",
        "nrp" => "243040078",
        "email" => "fahreza1079@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fahreza.jpg"
    ],

    [
        "nama" => "Miftah Mirza Mardiansyah ",
        "nrp" => "243040082",
        "email" => "miftahmardiansah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "miftah.jpg"
    ],

    [
        "nama" => "Rifqi Atha Dwi Dahrezi",
        "nrp" => "243040088",
        "email" => "rifqiatha17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rifqi.jpg"
    ],

    [
        "nama" => "Sandi Pratama Ramdhani",
        "nrp" => "243040098",
        "email" => "ramdhani14@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandi.jpg"
    ],

    [
        "nama" => "Ragil Rahaendi",
        "nrp" => "243040099",
        "email" => "ragilraheandi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ragil.jpg"
    ],

    [
        "nama" => "son heung min",
        "nrp" => "243040100",
        "email" => "sonheung67@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "son.jpg"
    ],

    [
        "nama" => "nicolo balerra",
        "nrp" => "243040101",
        "email" => "balerra@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "balerra.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>
                <img src="img/<?= $m["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $m["nama"]; ?></li>
            <li>NIM: <?= $m["nrp"]; ?></li>
            <li>Email: <?= $m["email"]; ?></li>
            <li>Jurusan: <?= $m["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>