<?php
//file Helper.php
//membuat beberapa function
function salam()
{
    return "Selamat Datang";
}

function getProdi($kode)
{
    $array = [
        11 => "Manajemen Informatika",
        25 => "Informatika",
        24 => "Sistem Informasi"
    ];
    return $array[$kode];
}

function getUsia($tahun_lahir)
{
    return (date('Y') - $tahun_lahir);
}

function getMasaStudi($tanggal_masuk)
{
    $diff = abs(strtotime($date('Y-m-d')) - strtotime($$tanggal_masuk));

    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    return ("$years tahun, $months bulan, $days hari");
}
?>