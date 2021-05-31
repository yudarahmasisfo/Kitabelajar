<?php
class kendaraan{
    //property = member data
    public roda;
    public function JumlahRoda($roda){
        return "Jumlah Roda Kendaraan $roda ";
    }
}

class mobil extends kendaraan{
    public function JumlahRoda($roda, $ukuran){
        return "Ini JUmlah Roda Mobil ";
        parent::JumlahRoda();
    }
}
 2 Jenis Overloading
 1. Member data yang terdiri dari fungsi : 
    a. __get()
    b. __set() 
    c. __isset()
    d __unset()
 
    2. Member fungsi
      a. _call
?>