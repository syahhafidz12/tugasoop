<?php

class Produk {
public  $judul, 
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jam;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga", $halaman=0, $jam=0)
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->jam = $jam;
}

public function getLabel(){
    return "$this->penulis, $this->penerbit";
}

public function getInfoProduk(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
    return $str;   
}

}

class Komik extends Produk{
public function getInfoProduk(){
    $str = "Komik :{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->halaman} Halaman.";
    return $str;
}
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - {$this->jam} Jam.";
        return $str;
    }
}



class CetakInfoProduk{
public function cetak(Produk $produk){
   return $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
}

}

$produk1 = new Komik("Naruto","Mahashi Kishimoto", "Shonen Jump", 300000, 100, 0);
$produk2 = new Game("GodWar","Neil Druckmann","Sony Computer", 500000, 0, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

