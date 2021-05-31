<?php 
class kucing{
    private $nama;
    private $umur;
    private $male_cat;
    private $female_cat;

     public function setNama($nama){ //setter memasukkan data ke propery
        $this->nama = $nama;
     }

     public function setUmur($umur){
         $this->umur = $umur;
     }

     public function setMale($male){
        $this->male_cat = $male;
    }

    public function setFemale($female){
        $this->female_cat = $female;
    }

    public function getMale(){
        return $this->male_cat;
    }

    public function getfemale(){
        return $this->female_cat;
    }
    
     public function getNama(){  //getter mengambil data dari setter
        return $this->nama;
     }
     public function getUmur(){
         return $this->umur;
     }


     public function hitung_jumlah_cat(){
        return $hasil = $this->getMale() + $this->getfemale();
     }
}
$kucing_kampung = new kucing();

$kucing_kampung->setNama('Johny');
echo "Nama Kucing Kampung Ku : ";
echo $kucing_kampung->getNama();
echo "<br>";
$kucing_kampung->setUmur('1 Tahun');
echo "Umur Kucing Kampung Ku : ";
echo $kucing_kampung->getUmur();
echo "<br>";
$kucing_kampung->setMale(4);
$kucing_kampung->setFemale(3);
echo "Jumlah Total Kucing Laki dan Perempuan adalah : "; 
echo $kucing_kampung->hitung_jumlah_cat();
echo " Ekor";
?>