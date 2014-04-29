<?php
#echo "Test";

$dirs = scandir(".");

foreach ($dirs as $dir) {
  echo "$dir";
}


?>
