<?php

class cetakkan_potbunga{
 //property = variabel, atribut
 
  var $warna;
  var $bentuk;
  var $jenis;

 
 //method, tingkah laku, fungsi, function
 public function keras($b){
   return  $this->bentuk=$b;
 }

 public function mudah_hancur(){
    return "Bahan mudah hancur";
 }


}

//membuat sebuah objek maka kita 
//menggunakan proses instasiasi
// keyword menggunakan new
$pot_persegi=new cetakkan_potbunga();
$pot_bulat = new cetakkan_potbunga();

//set property
$pot_bulat->warna="Biru";
$pot_bulat->bentuk="Bulat Pipih";
$pot_bulat->jenis="Pot Tanaman Hias";

//tampilkan property
echo $pot_bulat->warna;
echo "<br>";
echo $pot_bulat->bentuk;
echo "<br>";
echo $pot_bulat->jenis;
echo "<br>";
echo "<hr>";
//tampilkan 
echo $pot_bulat->mudah_hancur();
echo "<br>";
echo $pot_bulat->keras('Batu Kali')


?>