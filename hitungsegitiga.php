<?php
include 'Segitiga.php';

$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];

$Segitiga = new Segitiga($alas,$tinggi);

$luas = $Segitiga ->hitungLuas();
$keliling = $Segitiga ->hitungKeliling();

echo "HASIL PERHITUNGAN SEGITIGA SIKU-SIKU <br />";
echo "Luas Segitiga Siku-siku : " . $luas . "<br />";
echo "Keliling Segitiga Siku-siku : " . $keliling . "<br />";