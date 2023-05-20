<?php 
namespace Html;

class Table{
    public $title;
    public $numRows = 0;

    public function msg(){
        echo "Table {$this->title} has {$this->numRows} rows. \n";
    }
}

class Row{
    public $numCells = 0;
    public function msg(){
        echo "The row has {$this->numCells} cells. \n";
    }
}
?>