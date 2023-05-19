<?php 
    interface Animal{
        public function MakeSound();
    }
    class Cat implements Animal{
        public function MakeSound()
        {
            echo "Meow ";
        }
    }

    class Dog implements Animal{
        public function MakeSound()
        {
            echo "Gheo ";
        }
    }
    class Cow implements Animal{
        public function MakeSound()
        {
            echo "Humba ";
        }
    }
    $cat = new Cat();
    $dog = new Dog();
    $cow = new Cow();
    $animals = array($cat, $dog, $cow);

    foreach($animals as $animal){
        $animal->MakeSound();
    }
?>