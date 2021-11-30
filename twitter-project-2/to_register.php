<?php
	session_start();	
	require_once 'db.php';
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];

	mysqli_query($connect, "INSERT INTO `user` (`user_id`, `name`, `surname`, `password`, `login`, `e-mail`) VALUES (NULL, '$name', '$surname', '$password', '$login', '$email') ");
		header('Location: login.php');
	

	?>



