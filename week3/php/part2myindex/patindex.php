<?php
session_start();

require("connection.php");

if(isset($_SESSION['logged_in']))
	{
		 header("Location: wall.php");
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<title></title>
</head>
<body>
	<div id="outer">

		<div id="log_in">	
			<h1>Log In
<?php 
		if(isset($_SESSION['login_errors']))
		   {
		   		foreach($_SESSION['login_errors'] as $error)
		   		{
				echo $error ."<br />";
				}
				unset($_SESSION['login_errors']);

			} 
?>	</h1>	<form action="process.php" method="post">
				<input type="hidden" name="action" value="login">
				<label>Password</label>
				<input class="color" type="password" name="password">
				<label>Email</label>
				<input class="color" type="text" name="email"><br>
				<input class="color" id="button" type="submit" value="login">
		</form>
		</div>	

		<div id="Register">	

			<h2>Register</h2>
<?php
		 if(isset($_SESSION['register_errors']))
			{
				foreach($_SESSION['register_errors'] as $error)
				{
					echo $error . "<br />";
				}	
				unset($_SESSION['register_errors']);
			}

?>
			<form action="process.php" method="post">
				<input type="hidden" name="action" value="register">
				<label>First Name</label>
				<input class="color "type="text" name="first_name"><br>
				<label>Last Name</label>
				<input class="color" type="text" name="last_name"><br>
				<label>Email</label>
				<input id="email" class="color"  type="text" name="email"><br>
				<label>Password</label>
				<input class="color" type="password" name="password"><br>
				<label>Confirm</label>
				<input class="color" type="password" name="confirm_password"><br>
				<input class="color" id="button2"type="submit" value="register">
			</form>
		</div>	
</div>
</body>
</html>