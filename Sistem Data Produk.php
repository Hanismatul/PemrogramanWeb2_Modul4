<?php
class Produk{
    public $nama;
    public $kode;
    public $harga;
    public $stok;

    public function __construct(
        $nama,
        $kode,
        $harga,
        $stok
    ){
        $this->nama = $nama;
        $this->kode = $kode;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "Kode: " . $this->kode . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        
    }
}

$produk1 = new Produk(
    "Choki-choki",
    "P001",
    "1000",
    "20");

$produk2 = new Produk(
    "Silverqueen",
    "P002",
    "20.000",
    "15");

$produk1->tampilkanData();
echo "<hr>";
$produk2->tampilkanData();
?>