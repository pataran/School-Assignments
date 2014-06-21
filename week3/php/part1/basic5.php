<!DOCTYPE HTML>
<hmtl lang="en-US">
	<head>
		<meta charset="UTF-8"
		<title></title><br>
	</head>
<body>
<h2>Basic5</h2>


<?php
	$data = array(
		"4" => "*",
		"5" => "//",
		"9" => "Tom",
		"3" => "\\",
		"1" => "!",
		);
	function print_stars($sample)
	{

		foreach($sample as $key => $value)
			{
				if ($value = strtolower($value))
				{
					$lower = strtolower($value);
					$split = str_split ($lower);	
					$firstletter = $lower[0];

					
				}
				
				echo str_repeat($firstletter, $key) . "<br />";
			
			
		    }   	   		   				
				
	};	
	print_stars($data);	
				
?>


</body>
</html>