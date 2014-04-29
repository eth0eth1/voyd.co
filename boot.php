<?php
#echo "Test";

# Scan current directory
# Populate variable with contents
$in_dir = scandir(".");

# Build list of folders to exclude
$exclude=array(".","..",".git","font","img","css","js");


# Build unordered list of folders
echo "<ul>";
foreach ($in_dir as $contents) {
	
	# Only display if content is a directory
	if ( is_dir($content) ) {
		# Exclude directories within the exclusions
		if ( !in_array($content, $exclude) ) {
			echo "<li><a link=\"$content\">$content</a></li>";
		}
	}
}
echo "</ul>";

?>
