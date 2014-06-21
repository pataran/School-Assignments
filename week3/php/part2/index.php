<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>User Logic</title>
</head>
<body>

	<div id="wrapper">
		<h3 id="validation">
			<?php 
			if (isset($_SESSION['success_message']))
			{
				echo "<p>{$_SESSION['success_message']}</p>";
				unset($_SESSION['success_message']);
			}
			
			else if (isset($_SESSION['errors']))
			{
				foreach($_SESSION['errors'] as $message)
				{
					echo "<p>$message</p>";				
				}			
			}		
			?>
		</h3> 
		<form id="user_login" action="process.php" method="post">
				<label>Email</label><br>
				<input type="text" name="email" <?php 
				if(isset($_SESSION['errors']['email']))
				{
					echo 'class="error"';
					unset($_SESSION['errors']['email']);
				}?>
				placeholder="Email"><br>
				<label> First Name</label><br>
				<input type="text" name="first_name" placeholder="First Name" <?php 
				if(isset($_SESSION['errors']['first_name']))
				{
					echo 'class="error"';
					unset($_SESSION['errors']['first_name']);
				}?>><br>
				<label>Last Name</label><br>
				<input type="text" name="last_name" placeholder="Last Name"
				<?php 
				if(isset($_SESSION['errors']['last_name']))
				{
					echo 'class="error"';
					unset($_SESSION['errors']['last_name']);
				}?>><br>
				<label>Password</label><br>
				<input type="password" name="password" placeholder="Password"<?php 
				if(isset($_SESSION['errors']['password']))
				{
					echo 'class="error"';
					unset($_SESSION['errors']['password']);
				}?>><br>
				<label>Confirm Password</label><br>
				<input type="password" name="confirm_password" placeholder="Repeat Password"<?php 
				if(isset($_SESSION['errors']['confirm_password']))
				{
					echo 'class="error"';
					unset($_SESSION['errors']['confirm_password']);
				}?>><br>
				<label>Birthdate</label><br>
				<input type="text" name="birthdate" placeholder="mm/dd/yyyy"
				<?php 
				if(isset($_SESSION['errors']['birthdate']))
				{
					echo 'class="error"';
					unset($_SESSION['errors']['birthdate']);
				}?>><br>
				<input type="submit" value="login"><br>
		</form>
	</div>

</body>
</html>
 <?php
 unset($_SESSION['errors']);
 ?>