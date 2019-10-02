<?php

class Produk {
public  $judul, 
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jam,
        $tipe;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga", $halaman=0, $jam=0, $tipe)
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->jam = $jam;
    $this->tipe = $tipe;
}

public function getLabel(){
    return "$this->penulis, $this->penerbit";
}

public function getInfoLengkap(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
    if($this->tipe == "Komik"){
        $str .= "-{$this->halaman} Halaman.";
    }elseif($this->tipe == "Game"){
        $str .= "-{$this->jam} Jam.";
    }
    return $str;   
}

}

class CetakInfoProduk{
public function cetak(Produk $produk){
   return $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
}

}

$produk1 = new Produk("Naruto","Mahashi Kishimoto", "Shonen Jump", 300000, 100, 0, "Komik");
$produk2 = new Produk("GodWar","Neil Druckmann","Sony Computer", 500000, 0, 50, "Game");
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

