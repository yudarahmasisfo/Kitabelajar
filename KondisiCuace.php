<?php 
//global namespace
include("namespace2.php");
include("namespace3.php");

$cerah = new \cerah\cloudy();
$cerah->index();
echo "<br>";
$gelap = new \mendung\cloudy();
$gelap->index();
?>