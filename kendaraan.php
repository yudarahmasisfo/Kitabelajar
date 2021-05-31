<?php
// include_once 'motor.php';
include_once 'Honda/motor.php';
include_once 'Kawasaki/motor.php';
include_once 'Suzuki/motor.php';

$motor_honda = new \Honda\motor;
$motor_honda->MotorOn();

$motor_kawasaki = new \Kawasaki\motor;
$motor_kawasaki->MotorOn();

$motor_suzuki = new \Suzuki\motor;
$motor_suzuki->MotorOn();


?>