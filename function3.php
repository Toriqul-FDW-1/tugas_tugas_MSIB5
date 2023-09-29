<?php

function tambah($a, $b){
    $c = $a + $b;
    return $c;
}

//eksekusi
$x = 10;
$y = 20;

echo'hasil dari 50+30 = '.tambah(50, 30); //eksekusi value dari parameter
echo '<br>Hasil dari x + y = '.tambah($x,$y);
?>