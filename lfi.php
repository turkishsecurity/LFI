<!DOCTYPE html>
<html>
<head>
	<title>LFI</title>
</head>
<body>
<center>
	<h1>LFI by xale</h1>
	<p>payload : ?lang=[VULN]</p>
<?php


if (isset($_GET['lang']))

{
	error_reporting(0);
	include($lang);
}

?>
</center>
</body>
</html>
