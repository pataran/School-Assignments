<?php
	
session_start();
require("connection.php");

	
//check user login
	if(isset($_POST['action']) and $_POST['action'] == "login")
	{
		form_validation_log_in();
	}
	else if(isset($_POST['action']) and $_POST['action'] == "register")
	{
		register();
	}
	else if(isset($_POST['action']) and $_POST['action'] == "sendmessage")
	{
		insert_message();
		add_comment();
	}	
	else if(isset($_POST['action']) and $_POST['action'] == "addcomment")
	{
		add_comment();
	}	
	else
	{
		session_destroy();
		header("Location: patindex.php");
	}

function form_validation_log_in(){

	$errors = array();

	if(!(isset($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
	{
		$errors[] = "email is not valid";
	}

	if(!(isset($_POST['password']) and strlen($_POST['password'])>=6))
	{
		$errors[] = "pass must be greater than 6)";
	}

	if(count($errors) > 0)
	{
		$_SESSION['login_errors'] = $errors;
		header('Location: patindex.php');
	}
	else
 	{
		$query = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password ='".md5($_POST['password'])."'";
		$users = fetch_all($query);

		if(count($users)>0)
		{
			$_SESSION['logged_in'] = true;
			$_SESSION['user']['first_name'] = $users[0]['first_name'];
			$_SESSION['user']['last_name'] = $users[0]['last_name'];
			$_SESSION['user']['email'] = $users[0]['email'];
			$_SESSION['user']['id'] = $users[0]['id'];
			// var_dump($_SESSION);
			header("Location: wall.php");
			

		}
		else
		{
			$errors[] = "Invalid login information";
			$_SESSION['login_errors'] = $errors;
			header('Location: patindex.php');

		
		}
	}
}

function register(){
	$errors = array();
	if(!isset($_POST['first_name']) and is_string($_POST['first_name']) and strlen($_POST['first_name'])>0){
		$errors[] = "Input proper first name";
		}
	if(!isset($_POST['last_name']) and is_string($_POST['last_name']) and strlen($_POST['last_name'])>0){
		$errors[] = "Input proper last name";
		}
	if(!(isset($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
		{
		$errors[] = "email is not valid";
		}
	if(!(isset($_POST['password']) and strlen($_POST['password'])>=6))
		{
		$errors[] = "please double check your password (length must be greater than 6)";
		}

	if(!(isset($_POST['confirm_password']) and isset($_POST['password']) and $_POST['password'] == $_POST['confirm_password']))
		{
		$errors[] = "please confirm your password";
		}

if(count($errors) > 0)
	{
		$_SESSION['register_errors'] = $errors;
		header("Location: patindex.php");
	}
	else
	{
		//see if the email address already is taken
		$query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
		$users = fetch_all($query);	

		//see if someone already registered with that email address
		if(count($users)>0)
		{
			$errors[] = "someone already registered with this email address";
			$_SESSION['register_errors'] = $errors;
			header("Location: patindex.php");
		}
		else
		{
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '".md5($_POST['password'])."', NOW())";
			mysql_query($query);

			$_SESSION['message'] = "User was successfully created!";
			header("Location: patindex.php");
		}
    
    }
}

	 function insert_message(){
	
 		$query = "INSERT INTO messages (users_id, message,created_at) VALUES ('{$_SESSION['user']['id']}' ,'{$_POST['message_box']}', NOW())";
		mysql_query($query);

		
		$query = "SELECT message, messages.id ,messages.users_id, users.first_name, users.last_name, messages.created_at FROM messages left join users on users.id = messages.users_id  order by messages.created_at desc";
	 	$messages = fetch_all($query);
	 	
	 	
 		$_SESSION['wall_messages'] = $messages;

 		
		header("Location: wall.php");

	 	}

	 function add_comment(){
	 	// var_dump($_POST);
	 	// die;
	 	$query = "INSERT INTO comments (users_id, messages_id, comment, created_at) VALUES ('{$_SESSION['user']['id']}', '{$_POST['message_id']}' ,'{$_POST['comment_box']}', NOW())";
		mysql_query($query);
		$query = "SELECT comment, messages_id, users.first_name, users.last_name, comments.created_at FROM comments left join users on users.id = comments.users_id";
	 	$comments = fetch_all($query);
	 	
	 	$_SESSION['wall_comments'] = $comments;
	 	// var_dump($comments['messages_id']);

	 	header("Location: wall.php");

	 }




	

		
	

	



?>