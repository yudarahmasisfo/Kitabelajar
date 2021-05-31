<?php 

class Kucing{
  public $nama;
   
  //setter digunakan untuk memasukkan data ke dalam property
  public function setNamaKucing($nama){
    return $this->nama =$nama;
  }
  // getter digunakan untuk mengambil data
  public function getNamaKucing(){
      return $nama;
  }

}
$kucing_kampung = new Kucing();
$kucing_kampung->nama="Meri";
$kucing_kampung->setNamaKucing("Jony");
echo $kucing_kampung->getNamaKucing();

?>