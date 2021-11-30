<?php
	session_start();	
	require_once 'db.php';
	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$user_id = $_SESSION['user']['id'];
	
	mysqli_query($connect,"UPDATE user SET name='$name', surname='$surname' WHERE user_id='$user_id'");
	$_SESSION['user']['name'] = $name;
	$_SESSION['user']['surname'] = $surname;		
	header("Location:edit_profile.php");
	?>