<?php
	session_start();
	require('connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Ajax</title>
	<!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{

		$('.pagebuttons').click(function()
		{
			alert($(this).val());
		});
		// $('#test_form').submit();	

	 $('.date').datepicker({ dateFormat: 'yy-mm-dd' });
	$('#search_text').keyup(function()
		{
			$('#test_form').submit();			
		});
	$('.search_dates').keyup(function()
		{
			$('#test_form').submit();			
		});

	$('#test_form').submit(function()
		{
			var form = $(this);
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data)
				{
				$('#results').html(data.html)	
				},
				"json"
				);
				return false;
		});
	});
	</script>
	</head>
	<body>
		<h1> Search Database</h2>

		<form  action="process.php" method="post" id="test_form">
			<input type="hidden" name="action" value="submit">
				Name: <input id="search_text" type="text" name="name" >
				From: <input  class="date search_dates " type="text" name="from_date" />
				To: <input  class="date search_dates" type="text" name="to_date" />
			<input type="submit" value="submit">
		</form>

		<div id="pages"></div>

		<div id="results"></div>

	
	 <?php 	
	 	echo $_SESSION['html'];
	 	echo $_SESSION['html_links'];
	 		?>

			




</body>	
</html>