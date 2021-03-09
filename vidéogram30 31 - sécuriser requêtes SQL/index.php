<?php
/*
    #31 - 
     on peut utiliser bindValue(1,'la donnée')

  */
  
require'db_config.php';
try 
{
	$option =
	[
		PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
		PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,//  PDO::ERMODE_SILENT |  PDO::ERMODE_WARNING
		//PDO::ATTR_PERCISTENT => true 
    PDO::ATTR_EMULATE_PREPARES=> false
	];

	$PDO = new PDO($db_DSN,$db_USER,$db_PASS /*,$option*/);

//   $request = $PDO->prepare('SELECT * FROM fv_games');
	/*
   $request = $PDO->prepare('SELECT * FROM fv_games WHERE game_title = ?' );

   $nameofgame = 'RULE OF SURVIVAL';

       $request->bindParam(1,$nameofgame);
    // $request->bindValue(1,$nameofgame);

  $request->execute();
*/
  $request = $PDO->prepare('SELECT * FROM fv_games WHERE game_title = :variable ' );

   $nameofgame = 'RULE OF SURVIVAL';

       $request->bindParam("variable",$nameofgame);
    // $request->bindValue('variable' ,$nameofgame);

  $request->execute();



  echo "<pre>";
  print_r($request->fetchAll(PDO::FETCH_ASSOC));
  echo "<pre>";





    $request->closeCursor();
} 


catch (PDOException $pe) 
{
	echo "ERREJR : ".$pe->getMessage();
}

