<?php
#echo "Test";

$dirs = scandir(".");

echo "<ul>";

foreach ($dirs as $scan) {
  if ( is_dir($scan) ) {
	echo "<li>$scan</li>";
	}
}

echo "</ul>";

?>
