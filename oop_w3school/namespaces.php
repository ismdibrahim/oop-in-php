<?php 
namespace HTML;
class Table{
    public $title;
    public $namRows = 0;
    public function msg(){
        echo "Table {$this->title} has {$this->namRows} rows.";
    }
}

$table = new Table();
$table->title = "My Table";
$table->namRows = 5;

$table->msg();
?>