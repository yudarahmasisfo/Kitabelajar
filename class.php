<?php
// Membuat Aplikasi Siakad 
class fakultas{
    //property/atribut/variabel
    //properti = data yang terdapat dalam sebuah class 
    var $kode_fakultas='761';
    var $nama_fakultas="MIPA";
    var $nama_pendidikan="Universitas Tanjugpura Pontianak";

    // method or fungsi or tingkah laku
    // tindakan yang bisa dilakukan di dalam class.
    function simpan(){
        return "Simpan Data Fakultas";
    }

    function edit($kode){
        $this->kode_fakultas = $kode;
        return "Edit Data Fakultas";
    }

    function hapus(){
        return "Hapus Data Fakultas";
    }

    function tampilkan_data(){
        return "Tampilkan Data Fakultas";
    }

}
// proses mencetak objek dari class disebut proses instansiasi keyword = mew
$fmipa = new fakultas(); 

//set property
//$fmipa->kode_fakultas='MIPA-01';
//$fmipa->nama_fakultas="Fakultas MIPA";
//$fmipa->nama_pendidikan="Universitas Tanjungpura";

//tampilkan propert
// echo $fmipa->kode_fakultas;
// echo "<br>";
// echo $fmipa->nama_fakultas;
// echo "<br>";
// echo $fmipa->nama_pendidikan;

//tampilkan method
echo $fmipa->simpan();
echo "<br>";
echo $fmipa->edit();
echo "<br>";
echo $fmipa->hapus();
echo "<br>";
echo $fmipa->tampilkan_data();
?>