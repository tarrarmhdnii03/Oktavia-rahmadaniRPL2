<?php

$www = [ [
    "nama" => " Oktavia R.", 
    "kelas" => " X RPL 2", 
    "alamat" => "Jln. Pecenongan Jakarta Pusat",
    "nisn" => "0076977517",
    "no_wa" => "081646854768",
    "hobi" => "fotografi",
    "cita_cita" => "Membangun desain baju sendiri"],

 ["nama" => "Virda nuraini", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Pademangan no.4 ",
 "nisn" => "0077286789",
 "no_wa" => "081646854768",
 "hobi" => "ngikutin Morax",
 "cita_cita" => "Ngelindungi Morax"],

 ["nama" => "Raura donita", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. boncang no.44 ",
 "nisn" => "XXXXXX",
 "no_wa" => "XXXXXX",
 "hobi" => "Baca buku",
 "cita_cita" => "jadi orang kaya"],

 ["nama" => "Salma aisyah", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Galur no.44 ",
 "nisn" => "XXXXXX",
 "no_wa" => "XXXXX",
 "hobi" => "Membaca buku",
 "cita_cita" => "Guru"],

 ["nama" => "Alma Zazkia romadon", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. petaburan",
 "nisn" => "XXXXXXX",
 "no_wa" => "XXXXXXX",
 "hobi" => "XXXX",
 "cita_cita" => "XXXXX"],

 ["nama" => "Kenzie A", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Karanganyar no.44 ",
 "nisn" => "XXXXXXXX",
 "no_wa" => "XXXXXX",
 "hobi" => "Mendengarkan music",
 "cita_cita" => "Nikahi citra"],

 ["nama" => "Rio", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Senen no.44 ",
 "nisn" => "XXXXXXX",
 "no_wa" => "XXXXXXXX",
 "hobi" => "NGODING",
 "cita_cita" => "CJHRFBVHDFBJHV"],

 ["nama" => "Messi", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. petamburan",
 "nisn" => "XXXXXXX",
 "no_wa" => "XXXXXX",
 "hobi" => "XXXXXXX",
 "cita_cita" => "XXXXXXXXX"],

 ["nama" => "Rafiansyah", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jln. Cikini",
 "nisn" => "XXXXXXX",
 "no_wa" => "XXXXXXX",
 "hobi" => "XXXXXXX",
 "cita_cita" => "XXXXXXX"],

 ["nama" => "Dika/akbier", 
 "kelas" => " X RPL 2", 
 "alamat" => "Jogja",
 "nisn" => "XXXXXXXX",
 "no_wa" => "XXXXXXX",
 "hobi" => "XXXXXXXXXX",
 "cita_cita" => "XXXXXXXXX"]
 
];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Array</title>
 </head>
 <body>
    <h1> Peserta didik smk jakarta pusat 1 </h1>
    <table border = "1" cellpadding = "8">
        <tr>
            <td>Nama lengkap</td>
            <td>Kelas</td>
            <td>Alamat</td>
            <td>Nisn</td>
            <td>Nomor WhatsApp</td>
            <td>Hobi</td>
            <td>Cita-cita</td>
        </tr>
        <tr>
    <?php foreach($www as $data) : ?>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["kelas"]; ?></td>
            <td><?= $data["alamat"]; ?></td>
            <td><?= $data["nisn"]; ?></td>
            <td><?= $data["no_wa"]; ?></td>
            <td><?= $data["hobi"]; ?></td>
            <td><?= $data["cita_cita"]; ?></td>
        <tr/>
        <?php endforeach; ?>
        </table>
 </body>
 </html>