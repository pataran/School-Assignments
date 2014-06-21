<!DOCTYPE HTML>
<hmtl lang="en-US">
	<head>
		<meta charset="UTF-8"
		<title></title><br>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<body>
<h2>Advanced2</h2>
<?php
	function checkerboard(){
	echo "<table>";
		for($i = 0; $i < 8; $i++)
		{
			echo "<tr>";
			for($j = 0; $j < 8; $j++)
			{
				$color = ($i + $j)%2 ?'red' : "black";
			echo '<td bgcolor="'. $color .'"/>';
			}
			echo "</tr>";
		
		}
	

	echo "</table>";
	}
	checkerboard();

			
?>

</body>
</html>