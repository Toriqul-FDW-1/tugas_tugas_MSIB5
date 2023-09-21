<?php
//contoh komentar di php
// echo "hello world";


//latihan membuat variabel
$namaSiswa = "Toriqul Firdaus";//tipe data string
$umur = 22;//tipe data integer
$beratBadan = 55.5;//tipe data float
$_pekerjaan= 'Mahasiswa';

$jari2 = 15;
define('PHI', 3.14);

$luas = PHI * $jari2 * $jari2;
echo 'Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$beratBadan;
echo '<br>Pekerjaan : '.$_pekerjaan;
echo '<br> Berat Badan 2 : '.$beratBadan, ' kg';


?>
<br> Siswa : 1
<?= $namaSiswa ?>
<br> Umur :
<?= $umur ?>
<br> Luas jari-jari :
<?= $luas ?>