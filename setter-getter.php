<?php

class Produk {
private  $judul, 
        $penulis,
        $penerbit,
        $diskon = 0,     
        $harga;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga")
{
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
}

public function getJudul(){
    return $this->judul;
}

public function setJudul($judul){
    if(!is_string($judul)){
    throw new Exception("Judul Harus String");
    }
    $this->judul = $judul;
}

public function getPenulis(){
    return $this->penulis;
}

public function setPenulis($penulis){
    if(!is_string($penulis)){
    throw new Exception("Penulis Harus String");
    }
    $this->penulis = $penulis;
}

public function getPenerbit(){
    return $this->penerbit;
}

public function setPenerbit($penerbit){
    if(!is_string($penerbit)){
    throw new Exception("Penulis Harus String");
    }
    $this->penerbit = $penerbit;
}

public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
}

public function setHarga($harga){
    if(!is_double()($harga)){
    throw new Exception("Harga Harus Angka");
    }
    $this->harga = $harga;
}


public function getLabel(){
    return "$this->penulis, $this->penerbit";
}

public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
    return $str;   
}

public function getDiskon(){
    return $this->harga - ($this->harga * $this->diskon / 100);
}

public function setDiskon($diskon){
    $this->diskon = $diskon;
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
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
echo $produk2->setJudul("GOBLOK");
echo $produk2->getJudul();
echo $produk2->getPenulis();

