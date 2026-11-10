<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;
    public $semester;

    public function __construct($nama,$nim,$prodi,$semester){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

public function tampilkanData(){
    echo "Nama: " . $this->nama . "<br>";
    echo "NIM: " . $this->nim . "<br>";
    echo "Prodi: " . $this->prodi . "<br>";  
    echo "Semester: " . $this->semester . "<br>";  
    }

}

$mhs1 = new Mahasiswa(
    "Hanismatul","20242468","Sistem Informasi","5");

$mhs2 = new Mahasiswa(
    "Hilmiyatul","20243579","Pendidikan Teknologi Informasi","5");

$mhs1->tampilkanData();

echo "<hr>";

$mhs2->tampilkanData();

?>