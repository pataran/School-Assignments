<!DOCTYPE HTML>
<hmtl lang="en-US">
	<head>
		<meta charset="UTF-8"
		<title></title><br>
	</head>
<body>
<h2>Basic3</h2>


<?php
	function coin_toss($tossnum)
	{
		$attempt = 0;
		$headcounter = 0;
		$tailcounter = 0;
		$heads = 1;
		$tails = 2;
		
		for($i= 0; $i < $tossnum; $i++)
		{
			$attempt = "Attempt#" . $i;
			echo $attempt . "<br />";
			$toss = rand(1,2);

				if ($toss == $heads)
					{
					$headcounter = $headcounter + 1;
					echo "Throwing a coin...It's head!...Got " . $headcounter . " heads and " . $tailcounter . " tails <br />";				
					}
						else
						{
						$tailcounter = $tailcounter + 1;
						echo "Throwing a coin...It's tails!...Got " . $headcounter . " heads and " . $tailcounter . " tails<br />";		
						}
				if ($headcounter + $tailcounter == 6000)
					{
					echo "PROGRAM ENDED<br />";
					break;  
					}	
		    
	   }		   				
				
	};	
	coin_toss(7000);	




				
?>


</body>
</html>