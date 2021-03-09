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
	<title>hello</title>
	<link rel="stylesheet" type="text/css" href="<?= $monstyle?>.css">
</head>
<body>
<h1>page 2</h1>
<a href="?theme=claire">claire   </a> <br>
	<a href="?theme=sombre">   sombre</a> 
	<br>
<a href="index.php">page 1</a>
</body>
</html>