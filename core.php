<?php
session_start();


function is_loggedin(){
	return  isset( $_SESSION['authenticated'] );
}


// MVC 
// M Model 
// V View 
// C Controller