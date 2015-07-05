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
<link rel="stylesheet" type="text/css" href="styles/splash.css">
<script type="text/javascript" src="scripts/splash.js"></script>
</head>
<body onload="init();">
	<div id="splash">
		<ul>
			<li><a href="javascript:void(0); showLoginForm()" class="btn btn-default btn-raised">Login</a></li>
			<li><a href="javascript:void(0); showRegForm()" class="btn btn-default btn-raised">Register</a></li>
		</ul>
			<?php
				require_once('templates/main-login.php');
				require_once('templates/main-register.php');
			?>
		<a href="forgot-password">forgot your password?</a>
	</div>
	<?php
	require_once('templates/main-footer.php');
	?>
</body>
</html>
