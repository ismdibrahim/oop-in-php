<?php 
namespace Project;

include "c1.php";
include "c2.php";

use Project\Motorcycles\Bike as Honda;

$h = new Honda();
echo $h->getName();

// $p = new Motorcycles\Bike();
// echo $p->getName();
?>