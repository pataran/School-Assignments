<?php


 class Animal
 {
 	var $name;
 	var $health;

	function __construct($new_name,$new_health)
	{
		$this->name = $new_name;
		$this->health = $new_health;
	}
	function update_health($health)
	{
		$this->health = $this->health - $health;
		echo $this->health . "<br>";
	}
 	function walk()
 	{
 		$this->update_health(1);
 	}
 	function run()
 	{
 		$this->update_health(5);
 	}
 	function displayHealth()
 	{
 		echo $this->name . "<br>";
 		echo $this->health . "<br>";
 	}
 }

 class Dog extends Animal
 {
 	function __construct($new_name,$new_health)
	{
		$this->name = $new_name;
		$this->health = $new_health;
	}

	public function heal_health($health)
	{
		$this->health = $this->health + $health;
		echo $this->health . "<br>";
	}

	public function pet()
	{
		$this->heal_health(5);
	}

 }

 class Dragon extends Animal
 {
 	function __construct($new_name,$new_health)
	{
		$this->name = $new_name;
		$this->health = $new_health;
	}

	public function fly()
	{
		$this->update_health(10);
	}
 }


?>