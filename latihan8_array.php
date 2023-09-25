<?php
    // contoh array 1 dimensi
    $ar_buah = ['pepaya', 'anggur', 'apel', 'mangga'];
    //menambah index
    $ar_buah[] = 'naga';
    $ar_buah[] = 'manggis';
    $ar_buah[2] = 'nanas';//mengganti index ke 2
    unset($ar_buah[3]);//menghapus index ke 3

    echo '<br> cetak data array menggunakan looping foreach';
    foreach ($ar_buah as $id => $buah) {
        echo '<br> key array buah :'.$id;
    }
    foreach ($ar_buah as $buah) {
        echo '<br> data buah :'.$buah;
    }
?>

