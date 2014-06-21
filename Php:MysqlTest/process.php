<?php

require("connection.php");

if(isset($_POST['name']))
{
	$query = "SELECT * FROM World.City LEFT JOIN Country ON City.CountryCode = Country.Code WHERE Country.Name = '{$_POST['name']}'";

	$_SESSION['country'] = fetch_all($query);
	
	// var_dump($_SESSION);
	

	$lang_query = "SELECT * From CountryLanguage 
				LEFT JOIN Country ON Country.Code = CountryLanguage.CountryCode 
				WHERE Country.Name = '{$_POST['name']}'";

//COULD NOT GET THIS TO WORK IN TIME


				// select count(Country.Population * CountryLanguage.Percentage) 
				// as total from CountryLanguage 
				// left join Country on Country.Code = CountryLanguage.CountryCode 
				// group by CountryLanguage.Language

	$_SESSION['language'] = fetch_all($lang_query);
// var_dump($_SESSION['language']);


	header('Location: worldtest.php');
}