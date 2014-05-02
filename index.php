<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Custom Overrides -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<!-- Branding and mobile toggle menu -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Voyd.co</a>
					</div>
					
					<!-- Collect the nav links and bits for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
								<!-- Pull list of projects based on folders -->
								<?php
									require "indexer.php";
									$indexer = new Indexer("dropdown-menu");
									$indexer->listDirs();
								?>
							</li>
						</ul>
					</div>
					<!-- nav-collapse -->
				</div>
			</nav>
		</header>
		<article>

		</article>
		<footer>
		</footer>
		<!--Bootstrap JS placed at end of document to help with load times -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
	
	
</html>