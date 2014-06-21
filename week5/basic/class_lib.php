<?php


 class Bike
	{
		var $price;
		var $max_speed;
		var $miles;

		function __construct($new_price,$new_max_speed)
		 {
		 	 $this->price = $new_price;
		 	 $this->max_speed = $new_max_speed;
		 	 
		 	 $this->miles = 0;
		}

		function set_price($new_price){
			$this->price = $new_price;
		}
		public function get_price()
		{
			return $this->price;
		}

		function set_speed($new_max_speed)
		{
			$this->max_speed = $new_max_speed;
		}

		public function get_speed()
		{
			return $this->max_speed;
		}


		public function drive()
		{
			$this->update_drive(10) ;	
		}


		public function update_drive($num)
		{
			$this->miles = $this->miles + $num;
			echo "currently " . $this->miles . "<br>";
		}


		public function reverse()
		{
		 echo "Reversing " . ($this->miles -5)  . " miles<br>";
		
		}

		public function displayInfo()
		{
			 echo "price " . $this->price . "<br>";
			 echo "miles " . $this->miles  . "<br>";
			 echo "max_speed " . $this->max_speed . "<br>";
		}
	}


?>