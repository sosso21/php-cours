<?php
/*
    #30 - interroger base de données
pr avoir des info pdp
  -phpinfo()	;
  -exit()	;

    fetch() --> c pour eviter les affichage de donnée en brute
                 fetch(PDO::FETCH_ASSOC) : tableau associatuve (clé + valeur )
                 fetch(PDO::FETCH_ASSOC) :  c pour les afficher en objet

  */
  
require'db_config.php';
try 
{
  $option =
  [
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION //  PDO::ERMODE_SILENT |  PDO::ERMODE_WARNING
    //PDO::ATTR_PERCISTENT => true 
  ];
	$PDO = new PDO($db_DSN,$db_USER,$db_PASS /*,$option*/);
	$sql_s_db = 'SELECT * FROM fv_games';
	$result = $PDO->query($sql_s_db);
    // on peut aussi faire ca et ne rien mettre en bas
    //$result->setfetchmode(PDO::FETCH_ASSOC);

/*
    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
    	
	echo "<pre>";
	echo $data['game_title'] . " / ". $data['game_price'] . ' €';
	echo '<pre>';
    }
    */
/*
    while ($data = $result->fetch(PDO::FETCH_OBJ)) {
    	
	echo "<pre>";
	echo $data->game_title . "/ ". $data->game_price  .' €';
	echo '<pre>';
    }
*/
    // pour le cas ou on vx afficher bcp de donnée
    // question d'optimisation
    $nom_jeux = $result->fetchAll(PDO::FETCH_ASSOC);
    	
        foreach ($nom_jeux as $jeu)
         {
    	echo "<pre>";
    	echo $jeu['game_title']. " / ". $jeu['game_price'] . ' €';
    	echo "</pre>";
         } 

    $result->closeCursor();
	//echo 'connexion etablie.... ' ;
} 
catch (PDOException $pe) {
	echo "ERREJR : ".$pe->getMessage();
}


