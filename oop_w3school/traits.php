<?php 

    trait message1{
        public function msg1(){
            echo "OOP is fun! \n";
        }
    }
    trait message2{
        public function msg2(){
            echo "OOP reduce code duplicate \n";
        }
    }
    class Welcome1{
        use message1;
    }
    class Welcome2{
        use message1, message2;
    }

    $my = new Welcome2();
    $my->msg1();
    $my->msg2();

?>