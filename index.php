<?php
require 'vendor/autoload.php';
use Yoda\Cuboid;
$yoda = new Cuboid(56, 7.9,2.9);
//var_dump($yoda);
var_dump($yoda->area());