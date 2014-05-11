<!doctype html>
<html>
	<head>
	<link rel="stylesheet" href="style.css">
	<link rel=stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
	<link rel=icon href="img/icon.png">
	</head>
	<body>
	<!-- <img class="lazy" data-original="img/fox.png" width="100%" height="100%"> -->
		<div class="lazy" id="overlay" data-src="img/fox.png">
			<div id="mask">
				<span id="ip"> <?php echo $_SERVER['REMOTE_ADDR']; ?> </span>
			</div>
		</div>
		<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.lazy.min.js" type="text/javascript"></script>
		<script>
			jQuery(document).ready(function() {
			jQuery("div.lazy").lazy();
			});
		</script>
	</body>
</html>