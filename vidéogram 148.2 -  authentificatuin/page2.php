";<?php
session_start();
if (!$_SESSION['authentification']) 
{
	header('location:index.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>page 2</title>
</head>
<body>
<h1> Page 2 </h1>
<br>
<p> hello <?= htmlspecialchars($_SESSION['login']) ?> </p>
<a href="logout.php">Se deconnecter</a>
</body>
</html>