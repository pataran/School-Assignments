<?php
include('class_lib.php');



$animal1 = new Animal('Twinkletoes',100);

	echo $animal1->walk();
	echo $animal1->walk();
	echo $animal1->walk();
	echo $animal1->run();
	echo $animal1->run();
	echo $animal1->displayHealth();


$Dog1 = new Dog('Tiddlywinks', 150);

	echo $Dog1->pet();
	echo $Dog1->walk();
	echo $Dog1->walk();
	echo $Dog1->walk();
	echo $Dog1->run();
	echo $Dog1->run();
	echo $Dog1->displayHealth();

$Dragon1 = new Dragon('Mr Pringles', 170);

	echo $Dragon1->fly();
	echo $Dragon1->walk();
	echo $Dragon1->walk();
	echo $Dragon1->walk();
	echo $Dragon1->run();
	echo $Dragon1->run();
	echo $Dragon1->displayHealth();
?>
