";<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>page 2</title>
</head>
<body>
<h1> Page 2 </h1>
<p> hello <?= $_SESSION['Name']  ?> </p>
<a href="index.php">page1</a>

</body>
</html>