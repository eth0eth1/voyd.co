<!doctype html>
<html>
	<head>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Custom -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			# Enable error reporting
			error_reporting(-1);
			require "nav.php";
			require "indexer.php";
			$navbar = new Nav();
		?>
		<p> Test Data </p>
		<!--Bootstrap JS placed at end of document to help with load times -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>
