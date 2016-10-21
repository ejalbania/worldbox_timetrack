<?php 
	if(session_id() == '')
		session_start();
	include 'Database.php';

	$user = Database::FetchLogin($_POST['studentID'], $_POST['password']);

	if (count($user) == 0) {
		$user['message'] = 'User not found! Student ID and password do not match.';
		$user['found'] = false;
		echo json_encode($user);
		die();
	}else{
		$user['message'] = "Welcome *user's name*";
		$user['found'] = true;
		echo json_encode($user);
		
	}

	

 ?>