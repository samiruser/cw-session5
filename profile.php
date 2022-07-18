<?php
	require('core.php');

	// session_start();

	// if( ! isset( $_SESSION['authenticated'] ) ) {
	// 	header('location: login.php');
	// }

	if(!is_loggedin()){
		header('location: login.php');
	}

	$auth_user = $_SESSION['auth_user'];

	// var_dump($auth_user);

	$name = $auth_user['name'];


?>

<h1>Welcome <?php echo $auth_user['name'] ?> To your Profile</h1>

<a href="logout.php">Click here to logout!</a>

