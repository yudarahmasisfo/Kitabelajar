<?php

namespace honda;
class mobil{
    public function index(){
        return 'Honda Jazz';
    }
}

namespace toyota;
class mobil{
    public function index(){
        return 'Toyota';
    }
}

$hz = new \honda\mobil;
echo $hz->index();

echo "<br>";

$ty = new \toyota\mobil;
echo $ty->index();


?>