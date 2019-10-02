<?php

class Produk {
public  $judul, 
        $penulis,
        $penerbit,
        $harga;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga")
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}

public function getLabel(){
    return "$this->penulis, $this->penerbit";
}

}

class CetakInfoProduk{
public function cetak($produk1){
    $str = "$produk1->judul | $produk1->getLabel() | $produk1->harga";
}

}

$produk1 = new Produk("Mahashi Kishimoto", "Shonen Jump");
$produk2 = new Produk("Neil Druckmann","Sony Computer");
$produk3 = new Produk("Morokai");
echo "Komik :".$produk1->getLabel()."<br>";
echo "Game :".$produk2->getLabel()."<br>";
var_dump($produk3);

