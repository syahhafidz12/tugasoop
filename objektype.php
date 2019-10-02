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
public function cetak(Produk $produk){
   return $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
}

}

$produk1 = new Produk("Mahashi Kishimoto", "Shonen Jump");
$produk2 = new Produk("GodWar","Neil Druckmann","Sony Computer", 500000);
echo "Komik :".$produk1->getLabel()."<br>";
echo "Game :".$produk2->getLabel()."<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);

