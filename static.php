<?php

class Statik{
public static $angka = 1;

public static function hallo(){
    return "hallo".self::$angka."Kali.";
}
}

class Contoh{
    public static $angka = 1;

    public function halo(){
        return "Hallo".self::$angka++."Kali.";
    }
}

// echo Statik::$angka++."<br>";
// echo Statik::hallo()."<br><hr>";
// echo Statik::hallo()."<br><hr>";

$obj = new Contoh();
echo $obj->halo()."<br><hr>";
echo $obj->halo()."<br><hr>";

$obj1 = new Contoh();
echo $obj1->halo()."<br><hr>";
echo $obj1->halo()."<br><hr>";
