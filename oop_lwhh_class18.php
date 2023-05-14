<?php 

class DistrictCollection implements IteratorAggregate, Countable{
    private $districts;
    function __construct()
    {
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts);
    }
}
     
$d = new DistrictCollection();
$d->add('Dhaka');
$d->add('Khulna');
$d->add('Rajshahi');

// $_districts = $d->getDistricts();
// print_r($_districts);

// foreach($d as $district){
//     echo $district. "\n";
// }

echo count($d);
?>