<!DOCTYPE HTML>
<hmtl lang="en-US">
	<head>
		<meta charset="UTF-8"
		<title></title><br>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
<body>
<h2>Intermediate2</h2>


<?php
$rows = 10;
$cols = 10;
echo "<table>";
for($i = 1; $i <= $rows; $i++)
	
	{
	echo "<tr>";
		for($j=1; $j <= $cols; $j++)
		{
			echo "<td>" .$i * $j . "<td>";
		}
		echo "</tr>";
	}
	

echo "</table>";
			
?>

</body>
</html>