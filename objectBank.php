<?php
    require 'Bank.php';

    $n1 = new Bank('001', 'Andi', 600000);
    $n2 = new Bank('002', 'Aisyah', 700000);
    $n3 = new Bank('003', 'Aini', 800000);
    $n4 = new Bank('004', 'Anggun', 900000);
    $n5 = new Bank('005', 'Abdi', 1000000);


    $n1->setor(400000);
    $n2->ambil(200000);
    echo '<h3 align="center">' .Bank::BANK. '</h3>';
    $n1 -> cetak();
    $n2 -> cetak();
    $n3 -> cetak();
    $n4 -> cetak();
    $n5 -> cetak();

?>