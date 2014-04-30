<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar.collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Projects</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"> <a href="#">Test</a>
					</ul>
				</div>
				<!-- nav-collapse -->
			</div>
		</div>
		<header>
			<h1> Projects </h1>
		</header>
		<article>
		<!-- Pull list of projects based on folders -->
			<?php
			require "indexer.php";
			$indexer = new Indexer;
			$indexer->listDirs();
			?>
		</article>
		<footer>
			<p> Footer </p>
		</footer>
		<!--Bootstrap JS placed at end of document to help with load times -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
	
	
</html>