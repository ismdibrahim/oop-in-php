<?php 
class Goodbye{
    const LEAVING_MSG = "Thank you foe visiting our website.";
    function byebye(){
        echo self::LEAVING_MSG;
    }
}
$goodbye = new Goodbye;
$goodbye->byebye();
?>