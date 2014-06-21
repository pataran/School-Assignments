<?php


 class Car
 {
 	var $price;
	var $speed;
	var $fuel;
	var $mileage;
	var $tax;

	function __construct($new_price, $new_speed, $new_fuel, $new_mileage, $new_tax)
	{
		$this->price = $new_price;
		$this->speed = $new_speed;
		$this->fuel = $new_fuel;
		$this->mileage = $new_mileage;
		$this->tax = $new_tax;

	if($this->price > 10000)
		{
			$this->tax = .15;
		}
		else
			{
				$this->tax = .12;
			}
	}
		function display_all()
		{

			echo $this->price . "<br>";
			echo $this->speed . "<br>";
			echo $this->fuel . "<br>";
			echo $this->mileage . "<br>";
			echo $this->tax . "<br>";

		}

 }


?>