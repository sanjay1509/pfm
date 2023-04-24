<?php
// start the session
session_start();

// define valid credentials
$valid_username = "myusername";
$valid_password = "mypassword";

// get the submitted credentials
$username = $_POST['username'];
$password = $_POST['password'];

// check if the credentials are valid
if ($username === $valid_username && $password === $valid_password) {
	// set a session variable to indicate successful login
	$_SESSION['logged_in'] = true;
	
	// redirect to the success page
	header("Location: success.php");
	exit;
} else {
	// display an error message and redirect back to the login page
	echo "Invalid username or password.";
	header("refresh:3;url=index.php");
	exit;
}
?>
