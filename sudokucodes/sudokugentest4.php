<?php
ini_set("memory_limit","1000M");
$grid = array([3, 0, 6, 5, 0, 8, 4, 0, 0],
		[5, 2, 0, 0, 0, 0, 0, 0, 0],
	 	[0, 8, 7, 0, 0, 0, 0, 3, 1],
	 	[0, 0, 3, 0, 1, 0, 0, 8, 0],
	 	[9, 0, 0, 8, 6, 3, 0, 0, 5],
	 	[0, 5, 0, 0, 9, 0, 6, 0, 0],
		[1, 3, 0, 0, 0, 0, 2, 5, 0],
	 	[0, 0, 0, 0, 0, 0, 0, 7, 4],
	 	[0, 0, 5, 2, 0, 6, 3, 0, 0]);




function generate_sudoku_solution($grid)
{

$row = 0;
$column = 0;

	////////Assign Digits, make checks to see if is_cell_safe is can return the row and column value
	if(!unassigned_location($grid,$row,$column))
	{
		return true;
	}
	else
	{
		// var_dump($row);
		// var_dump($column);
		// die('here');	
		// var_dump($column);
	 ///->THIS EXECUTES
		for($num = 1; $num <= 9; $num++)
		// var_dump($num);
		{
		  	//-> THIS ISNT EVALUATING TRUE, IT MUST NOT BE MOVING SPACES
			if(is_cell_safe($grid, $row, $column, $num))
			{
			  $grid[$row][$column] = $num;
			  // var_dump($num);

			}
			if(generate_sudoku_solution($grid))
			{
				return true;
			}
		    else
		    {
		      $grid[$row][$column] = 0;
		    }
		}
	}
 			return false;////backtrack
 			// var_dump($grid);
}
generate_sudoku_solution($grid);

function unassigned_location(&$grid,&$row,&$column)
{
	
for($i = 0; $i < count($grid); $i++)
{
  	$row = $i;
    for($j = 0; $j < count($grid); $j++)
    {
      	$column = $j;
      	if($grid[$row][$column] == 0)
      	  {
      		return true;
      		// var_dump($grid[$row][$column]);
      		// var_dump( $value);
       	  } 
       	  else
       	  {
       	  	$value = false;
       	  	// var_dump($grid[$row][$column]);
       	  	// var_dump($value);	
       	  }
      }
  }
  // echo "Done";
  //  var_dump($value) ;
  	return $value;
 
  
}

function is_cell_safe(&$grid,&$row,&$column,&$num)
{
	$value = false;
	if(!(row_already_in_use($grid,$row,$num)) && !(column_already_in_use($grid,$column,$num)) && !(box_already_in_use($grid, ($row - $row % 3), ($column - $column % 3) , $num)))
	{
		$value = true;
	}
	return $value;	
}

function row_already_in_use(&$grid,&$row,&$num)
{
	$value = false;
	for($column = 0; $column < count($grid); $column++)
      {
	  	if($grid[$row][$column] == $num)
	  	  {
	  		$value = true;
	  		 // var_dump($grid[$row][$column]);
	   	  }
	  	 
	  }
	  return $value;

}


function column_already_in_use(&$grid, &$column, &$num)
{
	$value = false;
	for($row = 0; $row < count($grid); $row++)
	  {
	  	if($grid[$row][$column] == $num)
	  	  {
	  		$value = true;
	  		 // var_dump($grid[$row][$column]);
	   	  }
	  }
	  return $value;

}

function box_already_in_use(&$grid, $boxstartrow, $boxstartcolumn, &$num)
{
 $value = false;
 for($row = 0; $row < 3; $row++)
   {
     for($column = 0; $column < 3; $column++)
       {
         if($grid[$row+$boxstartrow][$column + $boxstartcolumn] == $num)
           {
         	 $value = true;
           }

       }	
   }
   return $value;
}




// function generate_coordinates($x,$y)
// {

// foreach($x as $xcord)
//   {
// 	foreach ($y as $ycord)
// 	{ 
// 		$pickNum = rand(0,9);
// 		$label = "coordinate{$xcord}{$ycord}";
// 		$locationData[$label] = ['x' => $xcord, 'y' => $ycord, 'value' => $pickNum] ;
	
// 		echo $locationData[$label]["value"];
		
// 	}
// 	echo "<br>"	; 
//   }
// return $locationData;
// }
// $coordinates = generate_coordinates([1,2,3,4,5,6,7,8,9],[1,2,3,4,5,6,7,8,9]);

// function cell_is_safe()
// 	return row_already_in_use() &&  column_already_in_use()
// {

// }

// echo $locationData["coordinate{$xcord}{$ycord}"]['numlist']

// $pickNum = rand(1,9);

		// $numList = array_push($usedNums, $pickNum)	;

				// if($locationData["coordinate{$xcord}{$ycord}"]['x'] == $xcord )
		// {

		// echo $locationData["coordinate{$xcord}{$ycord}"]['value'];


		// }
		
		//array_push($locationData, array($label => [$xcord,$ycord,$pickNum]));
		//array_push($locationData, array($label => ['x' => $xcord, 'y' => $ycord, 'value' => $pickNum]));
		
		// echo $locationData["coordinate{$xcord}{$ycord}"];

 //  echo "<pre>";
 // var_dump ($locationData);
 //  echo "</pre>";
  





// for($i = 1; $i < 10; $i++)
// 		{
// 			for($j = 1; $j < 10; $j++)
// 			{

// 				if($locationData["coordinate{$i}{$j}"]['x'] == 1 && $locationData["coordinate{$i}{$j}"]['value'] != $hasUsedNums )
// 				echo $locationData["coordinate{$i}{$j}"]['value'];

		

// 			}

// 		}
// echo $locationData["coordinate{$i}{$j}"]['x'];


?>