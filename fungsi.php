<?php 
class test{
    private $data= array(1,"2",4);

    public function __call($var, $val){
        foreach ($val as $v){
               $item .= $v;
               $item .= ","; 
        }
        echo "fungsi {$var} dengan nilai ";
        echo "{{$item}}  Tidak Ada";
    }
    public function tampilData($v, $l){
        echo "Tampil data {$v} dan {$l}";
    }
}
$tes = new test();
$tes->tampilData(1, "2");
?>