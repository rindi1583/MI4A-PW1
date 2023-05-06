<?php
//panggil fanction
//echo date('Y');

echo date('Y-m-d'); //tanggal masuk
echo strtotime(date('Y-m-d'));

//include, require
require_once('helper.php');

//panggil function salam()
echo salam();
echo "Selamat datang di kelas MI4A pada mata kuliah pemrograman web I";


//ini komentar
//VARIABLE
$npm = 2124110013;
$nama = "Rindi";
//penulisan variable
$program_studi = "Manajemen Informatika";
$tempatLahir = "Medan";
$kode_prodi = substr($npm, 4, 2); // output 11
//echo $kode_prodi;

//menampilkan variable
echo "<br>";
echo "NPM : " . $npm;
echo "<br>Nama : $nama";

//menampilkan dua variable
echo "<br>Lahir di " . $tempatLahir . " mengambil program studi $program_studi";
echo "<br>Program studi : " . getProdi($kode_prodi);

//array 
$mahasiswa = [
    "ribka",
    "rindi",
    "okta",
    "ardhan",
    "agung"
];

echo "<h2>Mahsiswa</h2>";
//menampilkan array
foreach ($mahasiswa as $item) {
    echo $item;
    echo "<br>";
}

//array di dalam array
$mahasiswa_MI4A = [
    [
        "npm" => 2124110013,
        "nama" => "Rindi",
        "asal" => "Palembang",
        "tgl_Lahir" => "2003-07-03",
        "tgl_Masuk" => "2021-09-1"
    ],
    [
        "npm" => 2224250007,
        "nama" => "Ribka",
        "asal" => "KM 9",
        "tgl_Lahir" => "2003-11-03",
        "tgl_Masuk" => "2022-09-1"
    ],
    [
        "npm" => 2024240008,
        "nama" => "Okta",
        "asal" => "Plaju",
        "tgl_Lahir" => "2003-02-03",
        "tgl_Masuk" => "2021-09-1"
    ],

];

echo "<h2>Mahasiswa MI4A</h2>";
//menampilkan array mahasiswa_MI4A
echo "<table border=1>
<tr>
    <th>NPM</th>
    <th>Nama</th>
    <th>Asal</th>
    <th>Prodi</th>
    <th>tgl_lahir</th>
    <th>Usia</th>
    <th>tgl_Masuk</th>
</tr>";

foreach ($mahasiswa_MI4A as $item) {
    //echo $item['npm']." - ". $item ['nama']."<br>";
    echo "<tr>
        <td>" . $item['npm'] . "</td>
        <td>" . $item['nama'] . "</td>
        <td>" . $item['asal'] . "</td>
        <td>" . getProdi(substr($item['npm'], 4, 2)) . "</td>
        <td>" . $item['tgl_Lahir'] . "</td>
        <td>" . getUsia(substr($item['tgl_Lahir'], 0, 4)) . " Tahun</td>
        <td>" . getMasaStudi(substr($item['tgl_Lahir'], 0, 4)) . " Tahun</td>

    </tr>";
}
echo "</table>";