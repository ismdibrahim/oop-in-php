<?php 

class Fund{
    private $fund;

    public function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }
    public function reduceFund($money)      
    {
        $this->fund -= $money;
    }
    public function getTotal()
    {
        echo "Total fund is {$this->fund}";
    }

}

$ourFund = new Fund(120);
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->getTotal();
?>