<?php
// Array associative - 1 siswa
$siswa = [
    "nis" => "12345",
    "nama" => "Ahmad WIjaya",
    "kelas" => "X RPL 1",
    "nilai" => 85
];

// mengakses dengan key
echo $siswa["nama"]; // Ahmad Wijaya
echo $siswa["nilai"]; // 85


// Array 2 dimensi - banyak siswa (seperti tabel database!)
$data = [
    ["nis" => "12345", "nama" => "Ahmad", "nilai" => 85],
    ["nis" => "12346", "nama" => "Budi", "nilai" => 78],
    ["nis" => "12347", "nama" => "Citra", "nilai" => 92],

];
?>