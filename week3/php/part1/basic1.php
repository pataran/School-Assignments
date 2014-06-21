<!DOCTYPE HTML>
<hmtl lang="en-US">
	<head>
		<meta charset="UTF-8"
		<title></title><br>
	</head>
<body>
<h2>Basic1</h2>

<?php
		

 function grade_score(){
    
    for ($i = 0; $i <= 100; $i++)
 	  {
 	  	$score = rand(50, 100);

    if ($score >= 90){
    	echo  "<h1>" . $score . "</h1><h2>You earned an A </h2>";
    }
	    else if ($score >= 80 && $score < 90)
	    {
	    		echo  "<h1>" . $score . "</h1><h2>You earned an B! </h2>";
	    }
		     else if ($score >= 70 && $score < 80)
		    {
		    	echo  "<h1>" . $score . "</h1><h2>You earned an C =/ </h2>";	
		    }
			    else
			    {
			    	echo  "<h1>" . $score . "</h1><h2>You need to study more! FAIL!!</h2>";
			    }

 	
 	  }
 	  
 };
 grade_score();
				
?>


</body>
</html>