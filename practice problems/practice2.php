<?php

$string = "6,2";
$numbers = explode(",",$string);
// var_dump($numbers);

for($i = 0;  $i <= count($numbers); $i++)
{
	
$power= pow($numbers[0],$numbers[1]) % 10; 
// $poweranswer = $numbers[0] * $power;
}

return $power;

?>