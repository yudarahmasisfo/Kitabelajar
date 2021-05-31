<title>Konsep Overloading - pada PHP _ OOP</title>
<?php
class Overloading{

    //teknik overloading itu ada dua jenis magic method /property overloading :
    // Member data terdiri atas fungsi
    // 1. __get(), 2. __set() 3. __isset() 4. __unset();
    //Member Fungsi terdiri atas fungsi 
    // 1. _call()


    public function __call($name, $arguments)    
    {    
      echo "Memanggil method $name : "   
         . implode(' - ', $arguments);    
    }    
     
    public static function __callStatic($name, $arguments)    
    {    
      echo "Memanggil method $name : "   
         . implode(' - ', $arguments);    
    }    
}

$objek = new Overloading;
//untuk method _call
$objek->Mamalia('Ikan Lumba','Ikan Paus','Kuda Air');
// static
echo "<br>";
Overloading::karnivora('Singa','Harimau','Macan Tutul');

?>