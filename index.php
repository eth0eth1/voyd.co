<?php

require "indexer.php";

#print "Test";

# Scan current directory
# Populate variable with contents
$in_dir = scandir(".");

# Build list of folders to exclude
$exclude=array(".","..",".git","font","img","css","js");


# Build unordered list of folders
print "<ul>";
foreach ($in_dir as $content) {
	
	# Only display if content is a directory
	if ( is_dir($content) ) {
		# Exclude directories within the exclusions
		if ( !in_array($content, $exclude) ) {
			print "<li><a href=\"$content\">$content</a></li>";
		}
	}
}
print "</ul>";

$indexer = new Indexer;

echo $indexer->sayTesting();

?>
