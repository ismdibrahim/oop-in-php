<?php 
namespace Html;
include 'html.php';

use Html as H;
$table = new H\Table();
$table->title = "Data";
$table->numRows = 5;

$row = new H\Row();
$row->numCells = 3;


$table->msg();
$row->msg();
?>