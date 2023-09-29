<?php
    require 'Gempa.php';

    $g1 = new Gempa ('Jepang', 1);
    $g2 = new Gempa ('Indonesia', 3);
    $g3 = new Gempa ('Korea', 5);
    $g4 = new Gempa ('Rusia', 6);

    $g1->cetak();
    $g2->cetak();
    $g3->cetak();
    $g4->cetak();

?>