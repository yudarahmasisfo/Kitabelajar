<title>Member data untuk overloading variabel __get()</title>

<?php 
class base{
    public $database="TestDB";
    public $nilaidefault=150;

    public function getDatabase(){
        return $this->namaDB;
    }

    // tambahkan fungsi overloading
    // __get()
    public function __get($var){
        echo "Tidak dapat mengakses member data :{$var}";
    }
}
$default = new base();
//ambil namadatabase
echo "Nama Database : ";
echo $default->namatabel;

?>