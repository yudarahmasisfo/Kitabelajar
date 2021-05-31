<title>Member fungsi __call overloading method/fungsi </title>
<?php 
class contoh{
    private $data = array(1,"2",5);
    public function __call($var, $val){
        foreach ($val as  $v){
            $item .= $v;
            $item .= ",";
        }
        echo "Fungsi {$var} dengan nilai ";
        echo "{{$item}} tidak ada";
    }
}

$test = new contoh();
$test->ShowData(1);

?>