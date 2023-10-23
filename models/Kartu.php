<?php

class Kartu{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;

    }

    //mengambil dan melihat tabel jenis_produk
    public function dataJenis(){
        $sql = "SELECT * FROM kartu";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $ps = $ps->fetchAll();
        return $ps;
    }
}
?>