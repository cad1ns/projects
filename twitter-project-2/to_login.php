<?php
	session_start();	
	require_once 'db.php';
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login`='$login' AND `password`='$password'");

		if(mysqli_num_rows($check_user)>0){

			$user = mysqli_fetch_assoc($check_user);

			$_SESSION['user'] = [
				"id" => $user['user_id'],
				"login" => $user['login'],
				"name" => $user['name'],
				"surname" => $user['surname']
			];

			
			setcookie('user_login', $user['login'], time()+60*60);
			setcookie('user_password', $user['password'], time()+60*60);
			header('Location: index.php');
		}
		else{
		$_SESSION['message'] = 'Login or password is invalid';
		header('Location: login.php');
	}

	?>


















