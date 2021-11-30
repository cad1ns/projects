<?php
	session_start();	
	require_once 'db.php';
	
	$t_id = $_POST['tweet_id'];
	$new_tweet = $_POST['tweettext'];
	
	mysqli_query($connect,"UPDATE tweets SET text = '$new_tweet' WHERE tweet_id='$t_id'");		
	$_SESSION['message'] = 'Tweet is changed!';
	header("Location:edit_posts.php");
	?>