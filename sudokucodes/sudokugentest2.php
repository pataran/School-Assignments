<?php

$grid = array();
$usedNums = array(); 
$locationData = array();
$chosenNumber = null;

$sudgrid = array([3, 0, 6, 5, 0, 8, 4, 0, 0],
				 [5, 2, 0, 0, 0, 0, 0, 0, 0],
 				 [0, 8, 7, 0, 0, 0, 0, 3, 1],
 				 [0, 0, 3, 0, 1, 0, 0, 8, 0],
 				 [9, 0, 0, 8, 6, 3, 0, 0, 5],
 				 [0, 5, 0, 0, 9, 0, 6, 0, 0],
				 [1, 3, 0, 0, 0, 0, 2, 5, 0],
 				 [0, 0, 0, 0, 0, 0, 0, 7, 4],
 				 [0, 0, 5, 2, 0, 6, 3, 0, 0]);
var_dump($sudgrid); 
echo "</br>";
 


function generate_Sudoku_grid()
{

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

function unassigned_Location()
{
foreach($x as $xcord)
  {
	foreach ($y as $ycord)
	{ 
		if(!empty($coordinates["coordinate{$xcord}{$ycord}"]['value']))
		  {
			true; 
			return $coordinates;
		  }
		  else
		    {
			 false;
			 return $coordinates;
			}
	}
  }
}

// unassigned_Location();
// var_dump(unassigned_Location());

// function row_already_in_use()
// {
//   foreach($x as $xcord)
//     {
//     foreach($y as $ycord)
//       {

//       	if($coordinates["coordinate{$xcord}{$ycord}"]['value'] == $num)
//       	{
//       		true;
//       	}else
//       	  {
//       	 	false;
//       	  }
//       }
//     }
// }
// row_already_in_use();

}
generate_Sudoku_grid();


// function column_already_in_use($grid, $num)
// {
//   foreach($x as $xcord)
//     {
//     foreach($y as $ycord)
//       {
//       	if($locationData["coordinate{$xcord}{$ycord}"]['value'] == $num)
//       	{
//       		return true;
//       	}else
//       	  {
//       		return false;
//       	  }
//       }
//     }
// }

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