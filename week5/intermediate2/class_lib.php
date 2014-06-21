<?php
require('connection.php');

class Process extends Database
{

	var $connection;

	public function __construct()
	{
		$this->connection = new Database();

		$data = array();

		if(isset($_POST['country']))
		{
			$query = "SELECT * FROM Country WHERE name = '{$_POST['country']}'";
			$country = $this->fetch_record($query);
			$html = "<h1>Country Information</h1>
						<h3>Country: {$country['Name']}</h3>
						<h3>Continent: {$country['Continent']}</h3>
						<h3>Region: {$country['Region']}</h3>
						<h3>Population: {$country['Population']}</h3>
						<h3>Life Expectancy: {$country['LifeExpectancy']}</h3>
						<h3>Government Form: {$country['GovernmentForm']}</h3>";
			echo json_encode($html);
		}
		elseif(isset($_POST['drop']))
		{
			$query = "SELECT name FROM Country";
			$countries = $this->fetch_all($query);
			$drop = "";
			foreach($countries as $country)
			{
				$drop .= "<option value='{$country['name']}'>{$country['name']}</option>";
			}
			
				echo json_encode($drop);
		}

			

	}
}
$process = new Process();

?>