<?php
	session_start();	
	require_once 'db.php';
	
	$text = $_POST['tweettext'];
	$user_id = $_SESSION['user']['id'];
	

	mysqli_query($connect,"INSERT INTO `tweets` (`tweet_id`, `text`, `user_id`, `date`) VALUES (NULL, '$text', '$user_id', current_timestamp())");
	
	$_SESSION['message'] = 'Tweet is published!';
	header("Location:create_post.php");
	?>


