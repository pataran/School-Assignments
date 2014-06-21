<?php
include('class_lib.php');


?><h2>car 1</h2>
<?php $bike1 = new Bike(200, 25);

	echo $bike1->drive();
	echo $bike1->drive();
	echo $bike1->drive();
	echo $bike1->reverse();
	echo $bike1->displayInfo();
?>
<h2>car 2</h2>
<?php

$bike2 = new Bike(200, 25);
	echo $bike2->drive();
	echo $bike2->drive();
	echo $bike2->reverse();
	echo $bike2->reverse();
	echo $bike2->displayInfo();

?>
<h2>car 3</h2>

<?php 
$bike3 = new Bike(200, 25);
	echo $bike3->reverse();
	echo $bike3->reverse();
	echo $bike3->reverse();
	echo $bike3->displayInfo();
?>