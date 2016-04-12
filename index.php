<!DOCTYPE html>
<html>
<head>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	include("lang/sv.php");
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap-and-material-design.min.css" charset="utf-8">

	<title>Codecamp</title>

</head>
<body>

		<header class="container-fluid">
			<div class="jumbotron">
				<h1>Codecamp</h1>
				<p class="lead">En nördingång</p>
			</div>
		</header>
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Brand</a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Active</a></li>
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Dropdown header</li>
            <li><a href="javascript:void(0)">Separated link</a></li>
            <li><a href="javascript:void(0)">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input class="form-control col-md-8" placeholder="Search" type="text">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
		<main class="container-fluid">
			<?php
			//This is where all the different pages will be included
			$regex = '/[^A-Za-z0-9\-_\/]/';
			$_GET['p'] = preg_replace($regex, '', $_GET['p']);

			if(file_exists('pages/' . $_GET['p'] . '.php')){
				include 'pages/' . $_GET['p'] . '.php';
			}
			else{
				include 'pages/404.php';
			}
			?>
		</main>
		<footer class="container-fluid">
			<p><?php echo COPYRIGHT;?></p>
			<script src="js/jquery.min.js" charset="utf-8"></script>
			<script src="js/bootstrap.min.js" charset="utf-8"></script>
			<script src="js/material.min.js" charset="utf-8"></script>
			<script src="js/ripples.min.js" charset="utf-8"></script>
		</footer>
	</body>
</html>
