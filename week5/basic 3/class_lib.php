<?php


 class Html_Helper
 {
 	function __construct()
 	{

 	}

 	function print_table($users)
 	{
 		foreach($users as $user=>$key)
 		{
 			
	 	$html ="<table border=1>
	 		<tbody>
	 		<tr>
	 		<td>First Name</td>
	 		<td>Last Name</td>
	 		<td>Nickname</td>
	 		</tr>
	 		<tr>
	 		<td>{$users['first_name']}</td>
	 		<td>{$users['last_name']}</td>
	 		<td>{$users['nick_name']}</td>
	 		</tr>
	 		</tbody>
	 		</table>";
	 		return $html;
		}
	}
	
	
	
 	function print_select($state,$sample_array)
 	{
 		$select = "<select name='$state' id='statelist'>";
 		foreach($sample_array as $states)
 		{	
 		$select .= "<option value='$states'>$states</option>";	
 		}
 		$select .= "</select>";
 		
 		return $select;
 		


 	}

 }


?>