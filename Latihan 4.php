<?php
class Buku{
    public $judul;
    public $penulis;
    
    public function __construct($judul,$penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

public function tampilkanData(){
    echo "Judul: " . $this->judul . "<br>";
    echo "penulis: " . $this->penulis;
    
    }

}

$buku1 = new Buku(
    "Cogan Indigo","Hanismatul");

$buku2 = new Buku(
    "Hilmy Dan Gus Dingin","Hanismatul");

$buku1->tampilkanData();

echo "<hr>";

$buku2->tampilkanData();

?>