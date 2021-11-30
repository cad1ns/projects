<?php
	session_start();	
	require_once 'db.php';
	
	$t_id = $_POST['tweet_id'];
	
	mysqli_query($connect,"DELETE FROM `tweets` WHERE `tweet_id` ='$t_id'");		
	header("Location:edit_posts.php");
	?>