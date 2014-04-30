<?php
class Indexer {

	# Scan current directory
	# Populate variable with contents
	private $in_dir = scandir(".");

	# Build list of folders to exclude
	private $exclude=array(".","..",".git","font","img","css","js");


	public function listDirs {
		# Build unordered list of folders
		echo "<ul>";
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