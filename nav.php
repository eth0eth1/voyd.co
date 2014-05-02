<?php 
# error_reporting(-1);

# Construct:
# ---------------------
# Pass JS ID
# Pass branding
# Pass array as menu items
 
 
class Nav {

	public function __construct() {

	# Build base componants
	#!! Replace #bs-example-navbar-collapse-1 with php variable
		$navbar = <<<EOL
		<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
		<div class="navbar-header">
		
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>

		</button>
EOL;
		
		# Navbar brand
		#!! Populate with php var
		echo "<a class=\"navbar-brand\" href=\"http://voyd.co.uk\">Voyd.co</a>";
		
		# Close navbar header
		echo "</div>";
		
		# Start navbar contents
		#!! Replace bs-example-navbar-collapse-1 with php variable
		echo "<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">";
		
		#!! Replace hard coded menu with array of arrays
		echo "<ul class=\"nav navbar-nav\">";
		echo "<li class=\"dropdown\">";
		
		echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Projects <b class=\"caret\"></b></a>";
		
		$indexer = new Indexer("dropdown-menu");
		$indexer->listDirs();
		
		# And now to wrap up
		
		echo "</li>";
		echo "</ul>";
		echo "</div>";
		echo "</div>";
		echo "</nav>";
		
	}	
	
	

}
 
?>