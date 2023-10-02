<?php
class Person{
    public $nama;
    public $gender;

    public function __construct($nama, $gender) {
        $this->nama = $nama;
        $this->gender = $gender;
    }

    public function cetak() {
        echo '<br> Nama: ' . $this->nama;
        echo '<br> Jenis Kelamin: ' . $this->gender;
    }
}

?>
