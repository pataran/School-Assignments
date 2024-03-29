<?php
	session_start();
include_once("connection.php");


class Process{

	var $connection;

	public function __construct(){

		$this->connection = new Database();

		$query = "SELECT * FROM users";
		$get_user = $this->connection->fetch_all($query);
		$_SESSION['get_user'] = $get_user;
		// var_dump($_SESSION['get_user']);
		//see if the user wants to login
		if(isset($_POST['action']) and $_POST['action'] == "login")
		{
			$this->loginAction();
		}
		else if(isset($_POST['action']) and $_POST['action'] == "register")
		{
			$this->registerAction();
		}
		else if(isset($_POST['action']) and $_POST['action'] == "add_friend")
		{
			$this->addFriend();
			header("Location:index.php");
		}
		elseif(isset($_POST['action']) and $_POST['action'] == "log_off")
		{
			//assume that the user wants to log off
			session_destroy();
			header("Location: index.php");
		}
	}

	private function loginAction()
	{
		$errors = array();

		if(!(isset($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
		{
			$errors[] = "email is not valid";
		}

		if(!(isset($_POST['password']) and strlen($_POST['password'])>=6))
		{
			$errors[] = "please double check your password (length must be greater than 6)";
		}

		//see if there are errors
		if(count($errors) > 0)
		{
			$_SESSION['login_errors'] = $errors;
			header('Location: index.php');
		}
		else
		{
			//check if the email and the password is valid
			$query = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password ='".md5($_POST['password'])."'";
			$users = $this->connection->fetch_all($query);
			
			if(count($users)>0)
			{
				$_SESSION['logged_in'] = true;
				$_SESSION['user']['first_name'] = $users[0]['first_name'];
				$_SESSION['user']['last_name'] = $users[0]['last_name'];
				$_SESSION['user']['email'] = $users[0]['email'];
				$_SESSION['user']['id'] = $users[0]['id'];
				header("Location: wall.php");
			}
			else
			{
				$errors[] = "Invalid login information";
				$_SESSION['login_errors'] = $errors;
				header('Location: index.php');
			}
		}
	}

	public function all_users()
	{
		$all_users_query = "SELECT * FROM users WHERE id!='{$_SESSION['user']['id']}'";
		return $this->connection->fetch_all($all_users_query);

	}

	public function addFriend()
	{
		$user_id = $_SESSION['user']['id'];
		$friend_id = $_POST['friend_id'];
		$addfriend_query= "INSERT INTO friends (user_id, friend_id) VALUES ({$user_id},{$friend_id}),({$friend_id},{$user_id})";		 
		return mysql_query($addfriend_query);
	
	}

	public function grab_friends(){
		$grab_friends_query = "SELECT *
				  FROM friends 
				  LEFT JOIN users
				  ON users.id = friends.friend_id
				  WHERE friends.user_id  = '{$_SESSION['user']['id']}'";
		return $this->connection->fetch_all($grab_friends_query);
	}

	public function check_friend($friend_id)
	{
		$check_user_query ="SELECT * FROM friends 
			   	 WHERE user_id = '{$_SESSION['user']['id']}' 
				 AND friend_id = {$friend_id}";
		if($this->connection->fetch_record($check_user_query))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}	

	private function registerAction()
	{
		$errors = array();
		//let's see if the first_name is a string
		if(!(isset($_POST['first_name']) and is_string($_POST['first_name']) and strlen($_POST['first_name'])>0))
		{
			$errors[] = "first name is not valid!";
		}

		//let's see if the last_name is a string
		if(!(isset($_POST['last_name']) and is_string($_POST['last_name']) and strlen($_POST['last_name'])>0))
		{
			$errors[] = "last name is not valid!";
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

		if(count($errors)>0)
		{
			$_SESSION['register_errors'] = $errors;
			header("Location: index.php");
		}
		else
		{
			//see if the email address already is taken
			$query = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
			$users = $this->connection->fetch_all($query);	

			//see if someone already registered with that email address
			if(count($users)>0)
			{
				$errors[] = "someone already registered with this email address";
				$_SESSION['register_errors'] = $errors;
				header("Location: index.php");
			}
			else
			{
				$query = "INSERT INTO users (first_name, last_name, email, password, created_at) 
						 VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '".md5($_POST['password'])."', NOW())";
				mysql_query($query);

				$_SESSION['message'] = "User was successfully created!";
				header("Location: index.php");
			}
		}
	}
}

$process = new Process();

?>