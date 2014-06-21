<?php
session_start();
function check_form(){
	

	$email = $firstname = $lastname= $password = $confirm = $birthdate = "";
	// $firstnameErr = $lastnameErr = $emailErr = $passwordErr = $confirmErr = $birthdateErr = "";

	

	function test_input($data)
	{	

		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;

	};

			$error_message = NULL;

			//Validate if each form is Empty and Set a Corresponding Message


			  if (empty($_POST["email"]))
			    {
			    	$error_message['email'] = "Email is required<br />";
			    	
			  

			    }
			  else
			    {
			    	$email = test_input($_POST["email"]);
			    }
				
			  if (empty($_POST["first_name"]))
			    {	    	
			    	$error_message['first_name'] = "First name is required<br />";
			    	
			    	
			    	}
			  else
			    {
			    	$firstname = test_input($_POST["first_name"]);
				}

			  if (empty($_POST["last_name"]))
			   {
				$error_message['last_name'] = "Last name is required <br />";
			
			       }
			  else
			    {
			    	$lastname = test_input($_POST["last_name"]);
				}

			  if (empty($_POST["password"]))
			    {
			    	$error_message['password'] = "Password Required<br />";
			    	
			    }
			  else if(strlen($_POST['password'] > 6))
			    {
			    	$error_message['password'] = "Password Needs to be more than six characters";
			    }
			    else
			    {
			    	$password = test_input($_POST["password"]);
			    }

			  if (empty($_POST["confirm_password"]))
			    {
			    	$error_message['confirm_password'] = "Confirm password cannot be blank<br />";
			    }

			    if(empty($_POST['confirm_password'])){
			    
			    }
			  else if($_POST['confirm_password'] != $_POST['password'])
			    {
			    	$error_message['confirm_password'] = "Passwords must match<br />";
			    	
			    }
			    else
			    {
			    	$confirm = test_input($_POST["confirm_password"]);
			    }
			    if(empty($_POST['birthdate'])){
			    	$error_message['birthdate'] = "Birthday is required<br />";
			    }
			  if (!empty($_POST["birthdate"]) and !preg_match("'\b(0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2}\b'", $_POST["birthdate"]))
			    {
			    	$error_message['birthdate'] = "Birthdate format error<br />";
			    	
			    }
			  else
			    {
			    	$birthdate = $_POST["birthdate"];
			    }
			    // var_dump($error_message);
		

	// Check First and Last Name for numbers

		  for($i =0; $i < strlen($firstname); $i++)		
			 	 {

					 if (is_numeric($firstname[$i]))
					{
					 	$error_message['first_name_check'] ="First name cannot have numbers<br />";
					 	
					 	break;
			 	 	} 
			 	 }
	  	  for($i =0; $i < strlen($lastname); $i++)		
			 	 {
					 if (is_numeric($lastname[$i]))
					{
					 $error_message['last_name_check'] = "Last name cannot have numbers<br />";
					
					 	break;
			 	 	} 
			 	 }
			 

 	//Check email to see if its valid

 	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	 	{
	 		$error_message['filter_email'] = "Invalid Email<br />";
	 		
	 	}
 	else{
 			$email = $_POST["email"];
 		}

 	//Make sure passwords match

 		if($password != $confirm){
 			$error_message['match_passwords'] = "Passwords do no match<br />";	
 			
 		} 	

 	//DOES SESSION HAVE ERROR MESSAGES
 		if($error_message == null)
	{
		$_SESSION['success_message'] = "Thanks";
	}
 	else
 	{
		$_SESSION['errors'] = $error_message;
		// var_dump($_SESSION['errors']);
		
	}
	header('location: index.php');
};
check_form();

?>