<?php
session_start();
$_SESSION['Name'] = "Sfoane";
?>
<!DOCTYPE html>
<html>
<head>
	<title>page 1</title>
</head>
<body>
<h1> Page 1 </h1>
<p> hello <?= $_SESSION['Name']  ?> </p>
<a href="page2.php">page2</a>

</body>
</html>