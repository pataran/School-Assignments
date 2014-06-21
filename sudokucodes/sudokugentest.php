<?php

$x = [1,2,3,4,5,6,7,8,9];
$y = [1,2,3,4,5,6,7,8,9];
$checkNums = [1,2,3,4,5,6,7,8,9];
$usedNums = array();
$locationData = array();
$chosenNumber = null;

foreach($x as $xcord)
  {
	
	foreach ($y as $ycord)
	{ 
		$label = "coordinate{$xcord}{$ycord}";
		
		$pickNum = rand(1,9);

		do  {
		$numList = array_push($usedNums, $pickNum)	;

		$locationData[$label] = ['x' => $xcord, 'y' => $ycord, 'value' => $pickNum , 'numlist' => $numList];
		echo $locationData["coordinate{$xcord}{$ycord}"]['numlist'];
		} while ($locationData["coordinate{$xcord}{$ycord}"]['value'] == $numList);
				// if($locationData["coordinate{$xcord}{$ycord}"]['x'] == $xcord )
		// {

		// echo $locationData["coordinate{$xcord}{$ycord}"]['value'];


		// }
		
		//array_push($locationData, array($label => [$xcord,$ycord,$pickNum]));
		//array_push($locationData, array($label => ['x' => $xcord, 'y' => $ycord, 'value' => $pickNum]));
		
		// echo $locationData["coordinate{$xcord}{$ycord}"];

	}

  }

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