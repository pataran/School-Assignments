<?php


$total = 0;
$sides = null;
$values = array(1,2,1,1,1,);

for($i = 0; $i < count($values)-1; $i++)
  {
  	$total += 1;
  	

  }
  	$sides = round($total/2);
  	echo $sides;
  	$sides = $values[$sides];
  	// echo $sides;

  $addleft = 0; 
  for($i = $values[$sides]; $i <= count($values); $i++)
  {

  	
  }


   $addright = 0; 
  for($i = $values[$sides]; $i >= count($values); $i++)
  {

  	
  }
  // echo $addleft;
  // echo $total;
  // echo $sides;




