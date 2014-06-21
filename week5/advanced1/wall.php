<?php
	
	include('process.php');

	// if(!isset($_SESSION['logged_in']))
	// {
	// 	header("Location: index.php");
	// }
?>
<html>
<head>
<title>Login and Registration</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		
	});
	</script>
</head>
<body>
Welcome <?= $_SESSION['user']['first_name'] ." " . $_SESSION['user']['last_name']?>!
<form action="process.php" method="post">
	<input type="hidden" name="action" value="log_off">
<!-- <a href="process.php">Log Off</a> -->
 	<input type="submit" value="LOG OFF" />

</form>

<h2> List of Users who subscribed to Friend Finder:</h2>
<table border=1>
	<tbody>
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Action</td>
	</tr>

<?php $user = new Process();
	$users = $user->all_users();
	foreach($users as $user)
    {?>
	<tr>
		<td><?= $user['first_name'] ?></td>
		<td><?= $user['email']?></td>

<?php 	$check = new Process();
		if($check->check_friend($user['id']))
           { ?>
               <td>Already a friend</td>
<?php }
            else
            { ?>
	    		<td>
				<form action="process.php" method = "post">
					<input type="hidden" name="action" value="add_friend">
					<input type="hidden" name="friend_id" value="<?=$user['id']?>">
					<input type="submit" value="Add as Friend">
					<?php isset($_SESSION['logged_in'])?>
				</form>
			</td>      
<?php  }?>
	
	</tr>
</tbody>
<?php } ?>
	</table>


		<h2>List of Friends</h2>
		<table border=1>
		<thead>
			<tr>
				<td>Name</td>
				<td>Email</td>
			</tr>
		</thead>
			<tbody>
			
<?php 
	$user = new Process();
	$friends = $user->grab_friends();

	 foreach($friends as $friend)
	{?>			
			<tr>
				<td><?= $friend['first_name'] ?></td>
				<td><?= $friend['email']?></td>
			</tr>
<?php
	}?>
			</tbody>   
		</table>



	
</body>
</html>
