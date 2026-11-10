<?php
class Mahasiswa {
    public $nama;
    public $prodi;

    public function __construct()
    {

    echo "Objek mahasiswa telah dibuat";
    }
}
$mhs1 = new Mahasiswa();
$mhs1->nama = "Hanismatul";
$mhs1->prodi = "Sitem Informasi";
?>