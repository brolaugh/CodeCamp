
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="index.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Raleway:700,400' rel='stylesheet' type='text/css'>
	<title>Codecamp</title>
</head>
<body>
	<div id="outer-wrapper">
		<div id="inner-wrapper">
			<a href="index.php"><header>
				<!-- Put nice header image here-->
			</header></a>
			<nav>
				<ul>
					<a href="index.php">
						<li>Hem</li>
					</a>
					<a href="info.php">
						<li>Info</li>
						<!-- Underkategorier till info är compete, learn och FAQ -->
					</a>
					<a href=""><li>Anmälan!</li></a>
				</ul>

			</nav>
			<main>
				<!-- this is where all the articles will be listed -->
				<?php
				$regex = '/[^A-Za-z0-9\-_\/]/';
				$_GET['p'] = preg_replace($regex, '', $_GET['p']);

				if(file_exists('articles/' . $_GET['p'] . '.php'))
					include 'articles/' . $_GET['p'] . '.php';
				else{
					//include('404.html')
					include('articles/test1.html');
					include('articles/test1.html');
					include('articles/test1.html');
					include('articles/test1.html');
				}
					


				
				?>
			<!--<article>
				<h3>Test heading</h3>
				<p>Är du nyfiken på programmering? Skulle du vilja veta hur det går till? Här erbjuds du nu möjligheten att få en första introduktion i programmerandets sköna konst av erfarna elever och lärare från IT-Gymnasiet. </p>
			</article>
			<article>
				<h3>Test heading</h3>
				<p>Här umgås vi som är intresserade av programmering med likasinnade under trevliga former-

En och en annan rad kod kommer säkert att läggas. Precis som en och annan pizza kommer att konsumeras. </p>
			</article>
			<article>
				<h3>Test heading</h3>
				<p>I Compete tävlar under 24 timmar och utvecklar ett program av ett satt tema, temat kan vara allt från systemverktyg till spel.</p>
			</article>
			<article>
				<h3>Test heading</h3>
				<p>Nananananana batman!</p>
			</article>
			<article>
				<h3>Test heading</h3>
				<p>Nananananana batman!</p>
			</article>
			<article>
				<h3>Test heading</h3>
				<p>Nananananana batman!</p>
			</article>-->
		</main>
	</div>

	<footer>
		<p>Copyright &copy; 2015 Hannes Kindströmmer</p>
	</footer>
</div>


</body>
</html>