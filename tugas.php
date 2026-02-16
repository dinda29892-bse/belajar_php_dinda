<?php
 $roda = 4;

echo "<h3> Sistem identifikasi Jenis kendaraan</h3>"
echo "<hr>";
echo "Roda: " . $roda . "<br><br>";

echo "<b>Hasil:</b><br>";

if($roda >= 2) {
    $sepedamotor = "A";
    $predikat = "Sangat Baik";
    $warna = "blue";
} elseif($roda >= 3) {
    $becak = "B";
    $predikat = "Baik";
    $warna = "green";
} elseif($roda >= 4) {
    $mobil = "C";
    $predikat = "Cukup";
    $warna = "orange";
} else {
    $truck_bus = "D";
    $predikat = "Kurang";
    $warna = "red";
}

echo "<div style='background:#f0f0f0; padding:10px; border-radius:5px;'>";
echo "<span style='font-size:24px; color; color:" . $warna . "; font-weight:bold;'>";
echo "roda: " . $mobil;
echo "</span><br>";
echo "predikat: " . $predikat;
echo "</div>";
?>

