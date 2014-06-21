<?php
 	 session_start();
 	 require('connection.php');
	
	
	require("connection.php");
	
//	if(!empty($_POST['message_box']))
	if( $_POST["action"] == "sendmessage")
	{	
		
		$data = send_message();
				
	}
	else
	{
		$data = send_comment();
			
	}

	 echo json_encode($data);

	

	function send_message()
	{
		$query_create_message = "INSERT INTO messages(message, created_at, updated_at) VALUES('{$_POST['message_box']}',NOW(),NOW())";
		mysql_query($query_create_message);	
		$query_message_id = "SELECT id FROM messages order by created_at DESC LIMIT 1";
		{
			
		$data['html'] = '<div class="message_container">
							<p>'. $_POST['message_box'] . '</p>
							<p>msg id= '. mysql_insert_id().'</p>
							<p>'. date("Y-m-d") . '</p>
							<div class="comment_container"></div>
							<form class="post_comment" action="process.php" method="post">
							 	<input type="hidden" name="action" value="sendcomment">
							 	<input type="hidden" name="action" value="{$message_id}">
					 			<div class="send_message_inputs">
									 <input type="text" name="comment_box">
								 	 <input type="submit" value=comment />
								</div>
			 				</form>
	  				     </div>';
	  	}			     
	 	return $data; 
	}

	 function send_comment()
	 {
	 	$query_message_id = "SELECT id FROM messages order by created_at DESC LIMIT 1";
		$message_id = fetch_all($query_message_id);
		// var_dump($message_id);
	 	$query_create_comments = "INSERT INTO comments(comment,messages_id,created_at,updated_at) VALUES('{$_POST['comment_box']}','{$message_id['0']['id']}',NOW(),NOW())";
	 	mysql_query($query_create_comments);

	 	$data['html'] = "{$_POST['comment_box']}";

	 	return $data;

	 }
		
	
	// elseif(!empty($_POST['sendcomment']))
	// {
	// 	$new_comment = send_comment();
	// 	echo json_encoded($new_comment); 
	// }
	
	
	
	
	
	/* Basic implementation of ajax by John S. Supsupin, Village88.com 2012
	 * jsupsupin@village88.com, skype: johndavid9991, facebook: narusaku09@yahoo.com 
	 * thanks for joining village88.com contact me for bugs of this tutorial


	 */
?>

