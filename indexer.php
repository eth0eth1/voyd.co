<?php
class Indexer {
	
	# Variable to be given as the html ul class
	var $ul_class;

	# Construct Indexer
	function __construct($ul_class) {
		$this->ul_class = $ul_class;
	}

	public function listDirs() {
		# Build list of folders to exclude
		$exclude=array(".","..",".git","font","img","css","js");
		
		# Scan current directory
		# Populate variable with contents
		$in_dir=scandir(".");
	
		# Build unordered list of folders
		# 'dropdown-menu' as test value
		echo "<ul class=\"$this->ul_class\">";
		foreach ($in_dir as $content) {
			
			# Only display if content is a directory
			if ( is_dir($content) ) {
				# Exclude directories within the exclusions
				if ( !in_array($content, $exclude) ) {
					# Echo as list item hyperlinks
					echo "<li><a href=\"$content\">$content</a></li>";
				}
			}
		}
		echo "</ul>";
	}

}

?>