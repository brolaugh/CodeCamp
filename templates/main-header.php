<!DOCTYPE html>
<html>
<head>
	<?php
	 	include("lang/en.php");
		include("templates/main-head.php");
	 ?>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="index.js"></script>
	<title><?php echo EVENTNAME." - Startsidan";?></title>
</head>
<body onload="$.material.init();">
	<div class="container">
		<h1>Work in progress</h1>

		<!-- Page header -->
		<div class="jumbotron">
			<h1><?php echo EVENTNAME ?> <small><?php echo HEADER_PARAGRAPH;?></small></h1>
		</div>


		<!-- nav-->
		<?php
			include_once("templates/menu.php");
		 ?>
