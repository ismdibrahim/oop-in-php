<?php 
    class MathCalculator{
        public $number;
        static $name;
        static function fibonacci($n){
            // self::$name = 12;
            self::doSomething();
            echo "Fibonacci serires up to {$n}\n";
        }
        static function doSomething(){
            echo "Doing something \n";
        }
        public function factorial($n){
            // self::doSomething();
            self::$name = "AB";
            $this->doSomething();
            echo "Calculatinf factorial of {$n}";
        }
    }

    $mathc = new MathCalculator();
    $mathc->factorial(8);

    MathCalculator::fibonacci(9);
    echo MathCalculator::$name;
?>