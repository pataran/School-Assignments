<?php
	session_start();

	if(!isset($_SESSION['logged_in']))
	{
		header("Location: patindex.php");
	}
?>

Welcome <?= $_SESSION['user']['first_name'] ." " . $_SESSION['user']['last_name'] ?>!

<a href="process.php">Log Off</a>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="wall_css.css" >
	<title></title>
</head>
<body>
	
	

<!-- 	<img src="screen.png" width="500" height="500">

	<img id="shadow" src="shadow.png"  alt="some_text" width="700" height="250"> -->
	<!-- ////needs if and else to compare message id -->
	<!-- <form action="process.php" method="post">
	 <input type="hidden" name="action" value="sendmessage">
	 <input id="messagesend" type="text" name="message_box" >
	 <br>
	<input id="sendmessage"type="submit" value="sendmessage">
	</form> -->
	<?php


	foreach($_SESSION['wall_messages'] as $message)
	{
		 echo "<div id='messagefield'>";
		echo "<div id='message'>";
		echo $message['message']; 	
		echo '</div>';
		echo'<br>'; 
		echo '<p>' . $message['first_name'] . " " . $message['last_name'] . " " . $message['created_at'] . '</p>';
		echo '<form action="process.php" method="post">';
		echo '<input type="hidden" name="action" value="sendmessage">';
	
		echo '<input id="messagesend" type="text" name="message_box" >';
		echo '<br>';
		echo '<input id="sendmessage"type="submit" value="sendmessage">';
	
		echo '</form>';
		  echo"</div>";


		
			echo "<div id='comments_container'>";
			

			
				foreach($_SESSION['wall_comments'] as $comments)
				{
					if($comments['messages_id'] == $message['id'])
					{
						// var_dump($comments);
						
						echo  $comments['comment'] . '<br>' . $comments['first_name'] . " " . $comments['last_name'] . " " . $comments['created_at'] ;	
						
		 			}
					
				 
			 	}
			 	echo '<form action="process.php" method="post">';
				echo "<input type='hidden' name='message_id' value='{$message['id']}'>";
				echo "<input type='hidden' name='action' value='addcomment'>";
				echo '<input id="comment_field" type="text" name="comment_box" value="comment">';
				echo '<input id="comment_message"type="submit" value="comment">';
				
			echo '</form>';
			 	echo "</div>";
	}		
		?>

		



</body>
</html>