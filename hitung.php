<?php 
class lingkaran{

    //keyword class adalah class
    // property
    $jari_jari;
    $phi=3.14;
    $hasil;

    //method
    function volume_lingkaran(){
        $v=$phi * ($jari_jari*$jari_jari);
        return $v;
    }

    function kililing_lingkaran(){
        $v= 2 * $phi * $jari_jari;
        return $v;
    }
    
    function luas_lingkaran(){
        $luas= $phi * ($jari_jari*$jari_jari);
        return $luas;
    }
}

?>