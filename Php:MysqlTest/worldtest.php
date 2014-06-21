<?php
require("connection.php");
$query = "SELECT name FROM Country";
$countries = fetch_all($query);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>World</title>
</head>
<body>
	<form action="process.php" method="post">
		<select name="name" id="countries">
<?php 		foreach($countries as $country)
			{ ?>
				<option value="<?= $country['name'] ?>"><?= $country['name'] ?></option>
<?php		} ?>
		</select>
		<input type="submit" value="Show Data">
	</form>
<?php   if(isset($_SESSION['country']))
		{ ?>
		<h1>Cities</h1>
			<TABLE id="countries2"border=1>
					<td><h3>ID</h3></td>
					<td><h3>NAME</h3></td>
					<td><h3>DISTRICT</h3></td>
					<td><h3>POPULATION</h3></td>

<?php			foreach($_SESSION['country'] as $country)
				{?>

			
					<tbody>
						<tr>
						<td><h3> <?= $country['ID'] ?></h3></td>
						<td><h3> <?= $country['Name'] ?></h3></td>
						<td><h3> <?= $country['District'] ?></h3></td>
						<td><h3> <?= $country['Population'] ?></h3></td>
						</tr>
					</tbody>
<?php			}?>
			</TABLE>

		<h1>Languages Spoken</h1>

			<TABLE border=1>

					<td><h3>LANGUAGE</h3></td>
					<td><h3>PERCENTAGE</h3></td>
					<td><h3>ISOFFICIAL</h3></td>
					<!-- <td><h3>POPULATION</h3></td> -->
<?php			foreach($_SESSION['language'] as $language)
				{?>
					<tr>
					<td><h3> <?= $language['Language'] ?></h3></td>
					<td><h3> <?= $language['Percentage'] ?></h3></td>
					<td><h3><?=  $language['IsOfficial'] ?></h3></td>
			<!-- <td><h3> <?= $_SESSION['language']['total'] ?></h3></td>  -->
					</tr>
<?php			}?>
			</TABLE>
<?php	} ?>
</body>
</html>
<?php
unset($_SESSION['country']);
?>