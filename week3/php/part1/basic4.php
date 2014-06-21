<!DOCTYPE HTML>
<hmtl lang="en-US">
	<head>
		<meta charset="UTF-8"
		<title></title><br>
	</head>
<body>
<h2>Basic4</h2>


<?php
	function get_max_min($array)
	{
		$currentmaxvalue = 0;
		$currentminvalue = 0;	
		

		for($i = 0; $i < count($array); $i++)
			{
				if ($currentmaxvalue < $array[$i])
					{
					$currentmaxvalue = $array[$i];
					
					}
				else
				{
					$currentminvalue = $array[$i];	
				}
				
			}
				$min_max = array(
					"max" => $currentmaxvalue,
					"min" => $currentminvalue,
					);
			foreach ($min_max as $key => $value) {
				echo $key . " " . $value . "<br>";
 			}
					    	   		   				
				
	};	
	get_max_min(array(135,2.4,2.67,1.23,332,2,1.02));	




				
?>


</body>
</html>