<!DOCTYPE html>
<html>
<body>

<?php
// __Use an iterable function argument__

// function printIterable(iterable $myIterable) {
//   foreach($myIterable as $item) {
//     echo $item;
//   }
// }

// $arr = ["a", "b", "c"];
// printIterable($arr);


// __Use Return an iterable:__

function getIterable():iterable {
    return ["a", "b", "c"];
  }
  
$myInterable = getIterable();
foreach ($myInterable as $item) {
    echo $item;
}


?>

</body>
</html>