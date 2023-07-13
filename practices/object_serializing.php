<?php 

// __Object Serializing__ 

// class Member{
//     public $username = "";
//     private $loggedIn = false;

//     public function login(){
//         $this->loggedIn = true;
//     }
//     public function logout(){
//         $this->loggedIn = false;
//     }
//     public function isLoggedIn(){
//         return $this->loggedIn;
//     }
// }

// $member = new Member();
// $member->username = "Ibrahim";
// $member->login();

// $memberString = serialize($member);
// echo "Converted the member to a string: $memberString \n";

// __ Object unserialize__ 

class Member{
    public $username = "";
    private $loggedIn = false;

    public function login(){
        $this->loggedIn = true;
    }
    public function logout(){
        $this->loggedIn = false;
    }
    public function isLoggedIn(){
        return $this->loggedIn;
    }
}

$member = new Member();
$member->username = "Ibrahim";
$member->login();

$memberString = serialize($member);
$member2 = unserialize($memberString);
echo $member2->username. " is " . ($member2->isLoggedIn() ? "Logged In" : "Logged out");


// __Sleep method with serialize__
//  class Member{
//     public $name="Ibrahim";
//     public $email="ibrahim@mail.com";
//     public $mobile="01989309451";
//     public  $address="Jashore,Bangladesh";
//     public function __sleep(){
//       return ["name","email"];
//     }
//   }
//   $member = new Member();
//   $memberString = serialize( $member );
//   echo $memberString;

?>