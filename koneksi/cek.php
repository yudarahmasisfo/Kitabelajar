<p>Overloading Member data fungsi __get()</p>
<?php
class cek{
    public $database= "OverloaD";
    public $nilaiStandar = 100;

    public function getDatabase(){
        return $this->nameDb;
    }

    //tambahkan fungsi overloading __get()
    public function __get($var){
        echo "Tidak dapat mengakses member data : {$var}"; 
    }
}

$koneksi = new cek();
    //AMBIL DATABASE
    echo "Nama Database: *";
    echo $koneksi->nilaiStandarata;

?>