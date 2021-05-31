<?php
include_once 'Jam.php';
include_once 'rolex/Jam.php';
include_once 'seiko/Jam.php';
include_once 'alexander/Jam.php';

$nonamejam = new \Jam;
$nonamejam->PowerOn();

$jamRolex = new \rolex\Jam;
$jamRolex->PowerOn();

$jamSeiko = new \seiko\Jam;
$jamSeiko->PowerOn();

$jamAlexander =new \alexander\Jam;
$jamAlexander->PowerOn();
?>