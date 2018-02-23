<!DOCTYPE html>
<html>
<head>
<title>
PHP MENU
</title>
</head>
<body>
MENU <hr />
    <li><a href="index.php?v=0">Home</a></li>
	<li><a href="index.php?v=1" >About Us</a></li>
	<li><a href="index.php?v=2" >Contact</a></li>
<?php
if (isset($_GET['v'])) {
	$get = $_GET['v']; // Default page
	} else {
		$get = -1;
	}
	
if ($get == -1) {
	   require "intro.html";
}
if ($get == 0) {
	   require "intro.html";
}
if ($get== 1) {
	require "about.html";
}

if ($get== 2) {
	require "contact.html";
}


?>



</body>
</html>
