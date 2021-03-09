<?php 
/*
  Les tableaux:
    structures :
      Ancienne façon :   $tab_integer : array() ;
      Nouvelle façon :    $tableau = [] ; //partie 1 //

    dump les variables :
      var_dump($tableau); //partie 1 //
      print_r($tableau);   // partie 1 //
      !! normalemnt  l'incrementation commence par 0 => n
      !! pour commencer par 1 : [1=>n]

    Afficher une case :
      echo $NHabitant["Djborland"]; // partie 2 //

    Modifier une case :
       $NHabitant["Djborland"] = 336699; //partie 2//

     Afficher avec Foreach:
        voir //partie 3 //

    !! il existe des fenctions  de tableaux
    !! voir la doc php

*/ 

 //partie 1 //
$tableau = 
[
	1=>11,
	"ok",
	12 ,[ 'a' , 'b' , "c" , ],
	3.14159265358979323 ,
	true ,
	"une fenction()",
];
/*
echo "<pre>";
var_dump($tableau);
echo "<pre>";
*/
echo "<pre>";
print_r($tableau);
echo "<pre>";
echo $tableau["5"];
echo "<pre>";

// Partie 2 //
$NHabitant =
[
	"Tizi Ouzou"=>100000,
	"Jelfa"=> 6,
	"Setif"=>69,
	"Djborland"=>1.618,
];
echo "<pre>";
echo $NHabitant["Djborland"];
echo "<pre>";
 $NHabitant["Djborland"] = 336699;
echo $NHabitant["Djborland"];
echo "<pre>";

//partie 3 //
foreach ($NHabitant as $key => $value) 
{
	echo $key. "/".$value. "<br>";
}
function pre()
{
  echo '<pre>';
}

pre();
print_r($NHabitant);
pre();


?>