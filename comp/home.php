<!DOCTYPE html>
<html>
<head>

<?php
	//For checking wether the user is logged in or not
	require_once('templates/main-redirecter.php');
	//All the global head element go here
	require_once('templates/main_head.php');
	//For loading userinfo and checking wether the user is logged in or not
?>
<link rel="stylesheet" type="text/css" href="style/feed.css">
<title>CodeCamp Compete - Feed</title>
</head>
<body>

	<?php
	//For a 100vh*100vw non moving background
	require_once('templates/main-background.php');
	require_once('templates/main-header.php');
	require_once('templates/main-feed.php');
	require_once('templates/main-footer.php');

	?>
</body>
</html>