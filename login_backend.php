<?php
session_start();


// $_POST

$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

// query the DB to find the respective user

// 

$user = [
	'email' => $user_email,
	'name' => 'Ahmad',
	'age' => 25,
	'account_type' => 'admin'
];

$_SESSION['auth_user'] = $user;
$_SESSION['authenticated'] = true;

header('location: profile.php');
