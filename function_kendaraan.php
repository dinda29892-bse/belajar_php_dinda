<?php
// function dengan 3 parameter
function kendaraan($Merk, $warna, $Tahun) {
    echo "=== Data Kendaraan ===<br>";
    echo "Merk : $Merk<br>";
    echo "Warna : $warna<br>";
    echo "tahun : $Tahun<br>";
    echo "<hr>";
}

// Memanggil dengan 3 parameter
kendaraan  ("supra", "putih", "2023");
kendaraan ("beat", "merah", "2024");
kendaraan ("vario", "biru", "2025");
?>
