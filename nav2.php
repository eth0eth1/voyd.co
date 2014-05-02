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
		
		echo "<nav class=\"navbar navbar-inverse\" role=\"navigation\">";
		echo "<div class=\"container-fluid\">";
		echo "<div class=\"navbar-header\">";
		
		echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">";
		# Build icon bars
		echo "<span class=\"sr-only\">Toggle navigation</span>";
		echo "<span class=\"icon-bar\"></span>";
		echo "<span class=\"icon-bar\"></span>";
		echo "<span class=\"icon-bar\"></span>";
		# Close button
		echo "</button>";
		
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