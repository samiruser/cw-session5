<?php
require('core.php');
// session_start();



// if( isset( $_SESSION['authenticated'] ) ) {
// 	header('location: profile.php');
// }

if(is_loggedin()){
	header('location: profile.php');
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
</head>
<body>
	

	<form action="login_backend.php" method="post" autocomplete="off">

		<label for="">Email</label>
		<input type="email" name="user_email">

		<br>
		<br>
		
		<label for="">Password</label>
		<input type="password" name="user_password">

		<br>
		<br>

		<button type="submit">Login</button>

	</form>


</body>
</html>