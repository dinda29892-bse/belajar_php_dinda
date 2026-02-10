<?php
// Program Kalkulator Sederhana
// Kita akan menghitung dua angka

$angka1 = 10; // variabel untuk menyimpan angka pertama
$angka2 = 5; // variabel untuk menyimpan angka kedua

echo "<h2> KALKULATOR SEDERHANA</h2>";
echo "<hr>"; // Garis horizontal

echo "Angka 1 = " . $angka1;
echo "<br>";
echo "Angka 2 = " . $angka2;
echo "<br><br>";

echo "<b>Hasil Perhitungan:</b><br>";
echo "penjumlahan = " . ($angka1 + $angka2);
echo "<br>";
echo "pengurangan = " . ($angka1 - $angka2);
echo "<br>";
echo "perkalian = " . ($angka1 * $angka2);
echo "<br>";
echo "pembagian = " . ($angka1/ $angka2);

?>