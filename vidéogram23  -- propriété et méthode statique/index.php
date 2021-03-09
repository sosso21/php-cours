<?php
/**
 * 
 */
class Database
{
	public static $_sgbd = 'mysql';

	public static function connect()
	{
		echo "Je me connect";
	}
}

echo Database::connect();
echo "<br>";
echo Database::$_sgbd ;
