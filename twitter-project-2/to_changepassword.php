<?php
	session_start();	
	require_once 'db.php';
	
	$oldpass = $_POST['old_password'];
	$newpass = $_POST['new_password'];
	$newpass1 = $_POST['confirm_new_password'];
	$user_id = $_SESSION['user']['id'];
	$check_pass = mysqli_query($connect, "SELECT `password` FROM `user` WHERE `password`='$oldpass' AND `user_id`='$user_id'");

		if(mysqli_num_rows($check_pass)>0){
			if($newpass==$newpass1){
				mysqli_query($connect,"UPDATE user SET password='$newpass' WHERE user_id='$user_id'");
			}
			else{
				$_SESSION['message'] = 'Repeated Password is not the same';
		header('Location: edit_profilephp');
			}
		}
		else{
		$_SESSION['message'] = 'Password is invalid';
		header('Location: edit_profile.php');
		}
	setcookie('user_password', $newpass, time()+60*60);
	unset($_SESSION['message']);
	header("Location:edit_profile.php");
	?>