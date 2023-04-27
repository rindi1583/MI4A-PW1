<?php
echo "Selamat datang di kelas MI4A pada mata kuliah pemrograman web I";

//ini komentar

//VARIABLE
$npm = 2124110013;
$nama = "Rindi";

//penulisan variable
$program_studi ="Manajemen Informatika";
$tempatLahir = "Medan";

//menampilkan variable
echo "<br>";
echo "NPM : ". $npm;
echo "<br>Nama : $nama";

//menampilkan dua variable
echo "<br>Lahir di ".$tempatLahir." mengambil program studi $program_studi";

//array 
$mahasiswa = [
    "ribka", "rindi", "okta", "ardhan", "agung"
];

echo "<h2>Mahsiswa</h2>";
//menampilkan array
foreach($mahasiswa as $item){
    echo $item;
    echo "<br>";
}

//array di dalam array
$mahasiswa_MI4A = [
    [
        "npm" => 2124110013,
        "nama" => "Rindi",
        "asal" => "Palembang"
    ],
    [
        "npm" => 2124110007,
        "nama" => "Ribka",
        "asal" => "KM 9"
    ],
    
];

echo "<h2>Mahasiswa MI4A</h2>";
//menampilkan array mahasiswa_MI4A
echo  "<table border=1>
<tr>
    <th>NPM</th><th>Nama</th><th>Asal</th>
</tr>";
foreach($mahasiswa_MI4A as $item){
    //echo $item['npm']." - ". $item ['nama']."<br>";
    echo "<tr>
        <td>".$item['npm']."</td>
        <td>".$item['nama']."</td>
        <td>".$item['asal']."</td>
    </tr>";
}
echo "</table>";