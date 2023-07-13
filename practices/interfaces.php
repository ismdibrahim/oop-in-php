<?php 
// // __Simple Interface__ 
// interface Animal{
//     public function makeSound();
// }
// class Cat implements Animal{
//     public function makeSound()
//     {
//         echo "Meow";
//     }
// }
// $cat = new Cat();
// $cat->makeSound(); 

// __another example__ 
interface Animal{
    public function makeSound();
}
class Cat implements Animal{
    public function makeSound()
    {
        echo "Meow ";
    }
}
class Dog implements Animal{
    public function makeSound()
    {
        echo "Bark ";
    }
}
class Mouse implements Animal{
    public function makeSound()
    {
        echo "Squeak ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat,$dog,$mouse);
foreach($animals as $animal){
    $animal->makeSound();
}

// __One more Example__ 
interface Presistable{
    public function save();
    public function load();
    public function delete();
}
class Member implements Presistable{
    private $username;
    private $location;
    private $homepage;
    public function __construct($username,$location,$homepage)
    {
        $this->username = $username;
        $this->location = $location;
        $this->homepage = $homepage;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getHomepage(){
        return $this->homepage;
    }
    public function save(){
        echo "Saving member to database \n";
    }
    public function load(){
        echo "Loading member to database \n";
    }
    public function delete(){
        echo "Deleting member to database \n";
    }
}
class Topic implements Presistable{
    private $subject;
    private $author;
    private $createdTime;
    public function __construct($subject,$author)   
    {
        $this->subject = $subject;
        $this->author = $author;
        $this->createdTime = time();
    }
    public function showHeader(){
        $createdTimeString = date( 'l jS M Y h:i:s A', $this->createdTime );
        $authorName = $this->author->getUsername();
        echo "$this->subject (created on $createdTimeString by $authorName) \n";
    }
    public function save() {
        echo "Saving topic to database \n";
    }
    public function load() {
        echo "Loading topic from database \n";
    }
    public function delete () {
        echo "Deleting topic from database \n";
    }
}

$aMember = new Member("Ibrahim", "Jahore", "www.mdibrahim.net");
echo $aMember->getUsername() . " lives in " . $aMember->getLocation() . "\n";
$aMember->save();

$aTopic = new Topic('Futonto Golap', $aMember);
$aTopic->showHeader();
$aTopic->save();
?>