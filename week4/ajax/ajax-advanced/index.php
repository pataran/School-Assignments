<?php
	session_start();
	require('connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Ajax</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
	 	$(document).ready(function(){

		// $("#postmessage").on('submit', function(){
		// 	var form = $(this);
	 // 		$.post(
		//  		$(this).attr('action'),
		//  		$(this).serialize(),
		//  		function(data)
		//  		{
		//  			$("#posts").prepend(data.html);

		// 		}, "json");
		// 		return false;
	 // 		});

		// $(document).on('submit', ".post_comment", function(){
		// 	var form = $(this);
	 // 		$.post(
		//  		$(this).attr('action'),
		//  		$(this).serialize(),
		//  		function(data)
		//  		{
		//  			form.siblings(".comment_container").prepend(data.html);

		// 		}, "json");
		// 		return false;
	 // 		});

		// $('.delete').click(function(){
			
		// 	$('.comment').hide()
		// 	alert("works");

		// });

	 	});
	 </script>
	</head>
	<body>


		<div id="wrapper">
			<form id="postmessage" action="process.php" method="post">
				<input type="hidden" name="action" value="sendmessage">
				<input type="text" name="message_box">
				<input type="submit" value=sendmessage />
			</form>
			<div id="posts">
	<?php

	 $get_messages = "SELECT * FROM messages ORDER BY id DESC";		
	$messages = fetch_all($get_messages);

 	foreach($messages as $message)
 	{	
  		 $get_comments = "SELECT * FROM comments WHERE messages_id = '". $message['id'] ."' ORDER BY id DESC";
  		 $comments = fetch_all($get_comments);?>
		 <div class="message_container">
				<p><?= $message["message"]?></p>
				<p><?= $message["created_at"]?></p>
				<div class="comment_container">	
<?php			foreach($comments as $comment)	
				{?>						
					<div class='comment'><?= $comment["comment"] ?></div>				
<?php			}?>	
				</div>		
				<form class="post_comment" action="process.php" method="post">
					<input type="hidden" name="action" value="sendcomment">	
				 	<div class="send_message_inputs">
						<input type="text" name="comment_box">
					 	<input type="submit" value=comment />

					 	<form class="delete_comment" action="process.php" method="post">
					 		<input type="hidden" name="delete" value="deletecomment">
							<input class= "delete" type="submit" value=delete />
						</form>
					</div>
		 		</form>
		  </div>
<?php 	  }?>
			</div>		 


			




	</div>
</body>
</html>