<!DOCTYPE html>
<html>
<body>
<?php
class buku {
  public $read;
  public $name;
  public $jenis_buku;
 
 public function identitas_buku(){
  return "Judul Buku ini adalah $this->name  jenis buku $this->jenis_buku";
 }

 public function baca_buku(){
  return "Saudara $this->read membaca buku berjudul $this->name";
 }
 
 public function dieja_buku(){
  $identitas =$this->identitas_buku();
  $dibaca =$this->baca_buku();
  $hasil=$identitas."<br>".$dibaca;
  return $hasil; 
 }
}
$buku1 = new buku();
//set propterty
$buku1->read="UWAIS";
$buku1->name="IPA";
$buku1->jenis_buku="ILmu Alam";

echo $buku1->identitas_buku();
echo "<br>";
echo $buku1->baca_buku();
echo "<br>";
echo "<hr>";
echo $buku1->dieja_buku();

?>
 
</body>
</html>



<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  
  public function set_color($color){
  	$this->color = $color;
  }
  
  function get_name() {
    return $this->name;
  }
  public function get_color(){
  	return $this->color;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_color('red');
$banana->set_color('yellow');

echo "Nama Buah = ".$apple->get_name();
echo " ";
echo "Warna Buah = ".$apple->get_color();
echo "<br>";
echo "Nama Buah = ".$banana->get_name(); 
echo " ";
echo "Warna Buah = ".$banana->get_color();


?>
 
</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
class buku {
  public $name;
  protected $jenis_buku="fighting";
  
  public function set_name($name) {
    $this->name = $name;
  }
  
  public function set_jenis($jenis){
  	$this->jenis_buku = $jenis;
  }
  
  public function get_name(){
  	return $this->name;
  }
  
  
  public function jenis_buku(){
  	return "Jenis Buku = $this->jenis_buku";
  }
  
}
$buku_satu = new buku();
$buku_satu->set_name("Naruto");
$buku_satu->set_jenis("Fighting atau Pertuanglangan");

echo "Juduk Buku = ".$buku_satu->get_name();
echo "<br>";
echo $buku_satu->jenis_buku();
?>
 
</body>
</html>
