<?php 
//tidak bisa diletakan didalam kelas artinya konstanta global
// define("angka",50);
// echo angka;

//bisa diletakkan didalam kelas
// const umur = 21;
// echo "<br>".umur;

// class Coba{
//     const nama = "Annas";
// }

// echo Coba::nama;

echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
function coba(){
    echo __FUNCTION__."<br>";   
}
coba();
class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;

?>