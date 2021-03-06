<!DOCTYPE html>
<html>
<head>

<?php
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	//If the user is logged in you get redirected to the home page
	require_once('classes/login.class.php');
	$login = new Login();
	if ($login->isLoggedIn()) {
		header('Location:home');
		exit();
	}
	//All the global head element go here
	require_once('templates/main-head.php');
?>
<title>CodeCamp Compete - Splash Page</title>
</head>
<body >
	<?php
	//For a 100vh*100vw non moving background
	require_once('templates/main-background.php');
	require_once('templates/main-login.php');
	require_once('templates/main-footer.php');

	?>
</body>
</html>