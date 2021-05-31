<?php 
class segitiga{
    var $alas;
    var $tinggi;

    public function hitungluas(){
        $luas = (0.5)* $alas * $tinggi;
        return $alas;
    }

    public function setAlas($alas){
        return $this->alas=$alas;
    }

    public function setTinggi($tinggi){
        return $this->tinggi=$tinggi;
    }
    public function getAlas(){
        return $alas;
    }

    public function getTinggi(){
        return $tinggi;
    }
    
}
$luas_bangun=new segitiga();
?>