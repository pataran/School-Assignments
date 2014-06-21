<?php
	session_start();	


	require("connection.php");


	

			///////EMPTY VALUES

			$data = array();
			$html = NULL;
			$html_links = NULL;


			//////QUERY PAGES

			$query_page_fields ="SELECT *  FROM lead_gen_business.leads 
								 WHERE registered_datetime >= '{$_POST['from_date']}' AND registered_datetime <= '{$_POST['to_date']}' 
								 AND (first_name LIKE '{$_POST['name']}%' OR last_name LIKE '{$_POST['name']}%') 
								 ORDER BY registered_datetime desc
								 LIMIT 0,10";

			$fields_page = fetch_all($query_page_fields);
			
			//////QUERY NUMBER OF ROWS WITH SAME PARAMETERS AS FIRST QUERY

			$query_total_fields ="SELECT leads_id, COUNT(*) FROM lead_gen_business.leads
								  WHERE registered_datetime >= '{$_POST['from_date']}' AND registered_datetime <= '{$_POST['to_date']}' 
						 		  AND (first_name LIKE '{$_POST['name']}%' OR last_name LIKE '{$_POST['name']}%') 
								  ORDER BY registered_datetime desc";
		
			$query_total = fetch_all($query_total_fields);

			/////GRAB COUNT TOTAL FROM QUERY AND ASSIGN CORRESPONDING VARIABLES

			$total = ($query_total['0']["COUNT(*)"]);			
			$num_pages = $total/10;

			/////CALCULATE THE TOTAL NUMBER OF PAGE LINKS

			if($total < 10)
			{
				$num_pages = 1;
			}
			//////Create Links

			for($i = 1; $i <= round($num_pages, PHP_ROUND_HALF_DOWN);  $i++)
			{
				
				$html_links .= "<form action='process.php' method='post' id='link_form'>
				<input type='hidden' name='page_action' value= $i />
				<input class='pagebuttons' type='submit' value=$i />
				</form>";

				if($_POST['page_action'] == 1){

					$query_total_fields ="SELECT leads_id, COUNT(*) FROM lead_gen_business.leads
								  WHERE registered_datetime >= '{$_POST['from_date']}' AND registered_datetime <= '{$_POST['to_date']}' 
						 		  AND (first_name LIKE '{$_POST['name']}%' OR last_name LIKE '{$_POST['name']}%') 
								  ORDER BY registered_datetime desc";
		
			$query_total = fetch_all($query_total_fields);

				///////START OF AJAX FORM

			$html = "<table border= 1> 	
			</thead>	
				<tr>
					<th>leads_id</th>
					<th>first name</th>
					<th>last name</th>
					<th>registered datetime</th>
					<th>email</th>
				</tr>
		    </thead>			
			<tbody>";
			

			//////GENERATE USER FORMS AND FORMAT FOR AJAX

			foreach($fields_page as $user)
			{

				$html .= "
				<tr>
					<td>{$user['leads_id']}</td>
					<td>{$user['first_name']}</td>
					<td>{$user['last_name']}</td>
					<td>{$user['registered_datetime']}</td>
					<td>{$user['email']}</td>			
				</tr>
				";
			}									
			$html .= "
			</tbody>
			</table>";	


				}
				
			}
			
			
			$data['html'] = $html;
			$data['html_links'] = $html_links;
			// echo json_encode($data);	
			// echo $data['html_links'];
			$_SESSION['html'] = $html;
			$_SESSION['html_links'] = $html_links;
			header('LOCATION: index.php');
	
	
?>



