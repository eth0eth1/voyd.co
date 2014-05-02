<!doctype html>
<html>
	<head>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Custom Overrides -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<p> Test Hard Code </p>
		<?php
			require "nav.php";
			$navbar = new Nav();
		?>
		
		<!--Bootstrap JS placed at end of document to help with load times -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>