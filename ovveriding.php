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

public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
    return $str;   
}

}

class Komik extends Produk{
public $halaman;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga", $halaman = 0)
{
   parent::__construct($judul, $penulis, $penerbit, $harga);
   $this->halaman = $halaman;
}

public function getInfoProduk(){
    $str = "Komik :".parent::getInfoProduk(). "- {$this->halaman} Halaman.";
    return $str;
}
}

class Game extends Produk{
    public $jam;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga",$jam =0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
       $this->jam = $jam; 
    }
    public function getInfoProduk(){
        $str = "Game : ".parent::getInfoProduk(). "- {$this->jam} Jam.";
        return $str;
    }
}



class CetakInfoProduk{
public function cetak(Produk $produk){
   return $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
}

}

$produk1 = new Komik("Naruto","Mahashi Kishimoto", "Shonen Jump", 300000, 100);
$produk2 = new Game("GodWar","Neil Druckmann","Sony Computer", 500000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

