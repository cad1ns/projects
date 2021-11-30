<?php
	$connect= mysqli_connect('localhost','root','','kbtu_twitter');

	if(!$connect){
		die('Error connect to DB');
	}
