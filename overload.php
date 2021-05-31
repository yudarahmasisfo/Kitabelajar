<?php
class mobil{
    public $roda;

    public function jumlahRoda($roda){
        return $this->roda = $roda;
    }
}
class bemo extends mobil{
    //ovveriding
    public function jumlahRoda($roda){
       return "Jumlah Roda Kendaraan Bemo ".$this->roda;
    }
}
$bemo1 = new mobil();
echo $bemo1->jumlahRoda();
?>