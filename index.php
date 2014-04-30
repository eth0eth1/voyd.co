<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
	<h1> Projects </h1>
</header>

<article>
<!-- Pull list of projects based on folders -->
<?php
require "indexer.php";
$indexer = new Indexer;
$indexer->listDirs();
?>
</article>

<footer>

<p> Footer </p>

</footer>
</body>
