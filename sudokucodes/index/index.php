<?php
// ini_set('xdebug.max_nesting_level', 1400);
	class Soduko
	{
		protected $grid = [
			[3, 0, 6, 5, 0, 8, 4, 0, 0],
			[5, 2, 0, 0, 0, 0, 0, 0, 0],
			[0, 8, 7, 0, 0, 0, 0, 3, 1],
			[0, 0, 3, 0, 1, 0, 0, 8, 0],
			[9, 0, 0, 8, 6, 3, 0, 0, 5],
			[0, 5, 0, 0, 9, 0, 6, 0, 0],
			[1, 3, 0, 0, 0, 0, 2, 5, 0],
			[0, 0, 0, 0, 0, 0, 0, 7, 4],
			[0, 0, 5, 2, 0, 6, 3, 0, 0]
		]; //the sample grid

		function generate_soduko()
		{
			for($x=0; $x < 9; $x++)
			{
				for($y=0; $y < 9; $y++)
				{
					if($this->grid[$x][$y] == 0)
						$this->add_number($x, $y);
				}
				echo "<br />";
			}
		}

		function add_number($x, $y)
		{
			for($num = 1; $num <= 9; $num++)
			{
				if($this->is_safe($x,$y, $num))
					$this->grid[$x][$y] = $num;				
			}
		}

		function is_safe($x,$y,$num)
		{
			// if($this->check_row($x, $num) AND $this->check_column($y, $num))
			// && ($this->check_column($y, $num)))
			if(($this->check_row($x, $num)) && $this->check_column($y, $num))
			{
				return true;
			}
			else{
				return false;
			}
		}

		function check_row($x, $num)
		{
			$value = true;
			for($counter=0; $counter < 9; $counter++)
			{
				if($this->grid[$x][$counter] == $num)
					
					$value = false;
			}

			return $value;
		}

		function check_column($y, $num)
		{
			$value = true;
			for($counter=0; $counter < 9; $counter++)
			{
				if($this->grid[$counter][$y] == $num)

					$value = false;
				// echo "column used[$counter]   conflict num is   [$num]";
				// 	var_dump($num);
				
					// $num = $this->add_number($x,$y);
					// var_dump($num);
			}

			return $value;
		}


		function display_grid()
		{
			for($x=0; $x < 9; $x++)
			{
				for($y=0; $y < 9; $y++)
				{
					echo $this->grid[$x][$y] ." ";
				}
				echo "<br />";
			}
		}
	}

$soduko = new Soduko();
$soduko->generate_soduko();
$soduko->display_grid();


// answer
//  3 1 6 5 7 8 4 9 2
//   5 2 9 1 3 4 7 6 8
//   4 8 7 6 2 9 5 3 1
//   2 6 3 4 1 5 9 8 7
//   9 7 4 8 6 3 1 2 5
//   8 5 1 7 9 2 6 4 3
//   1 3 8 9 4 7 2 5 6
//   6 9 2 3 5 1 8 7 4
//   7 4 5 2 8 6 3 1 9
?>

