<?php
session_start();
$_SESSION['login'] = $login =  $_POST['login'];
$pwd =  $_POST['pwd'];
$connect  =  $_POST['connect'];
$error = " " ;

if (isset($connect)) 
{
	if (md5($login == 'b7a39971413f4e13073ffb389d24428c') && md5($pwd =='4a7d1ed414474e4033ac29ccb8653d9b') && !empty($login) && !empty($pwd) )
	{
	    $_SESSION['authentification'] = true;
	    header('location:page2.php');
	}
    else $error = "mdp incorrect"; 
}/*
echo md5("sofiane");
echo "<br>";
echo md5('0000');
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>page 1</title>
</head>
<body>
<h1> Page 1 </h1>
<p> 
<form method="post" action="index.php">
	<label for="Username">Username</label>:<input type="text" name="login" required><br>
	<label for="password">password</label>:<input type="password" name="pwd" required><br>
	<input type="submit" name="connect" value="se connecter">
	<br><?= $error ; ?>

</form>
</p>


</body>
</html>