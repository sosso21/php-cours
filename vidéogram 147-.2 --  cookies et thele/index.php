<?php
@$theme = $_GET['theme'];
if ($theme == 'claire' || $theme == 'sombre')
 {
 	setcookie('theme',$theme,time()+3600*24*365);
 	header('location:index.php') ;
}
$monstyle = (empty(@$_COOKIE['theme']))?("sombre"):(@$_COOKIE['theme']);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hallo</title>
	<link rel="stylesheet" type="text/css" href="<?= $monstyle?>.css">
</head>
<body>

<h1>page 1</h1>
	<a href="?theme=claire">claire   </a><br>
	<a href="?theme=sombre">   sombre</a><br>
	<a href="page2.php">page2</a>


</body>
</html>