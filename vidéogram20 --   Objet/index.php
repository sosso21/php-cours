<?php
/*
     LES OBJETS :
        Crée une class       :  // partie 1 
        Détruire une classe  :  // Partie 2 
*/
//Partie 1 //

class Vehicule
{ 
	public function __construct()
	{
		echo "Je suis construit";
	}
	public function __destruct() //partie 2 //
	{
		echo "Je suis detruit";
	}	
}

$OBJ1 = new Vehicule()	;
$OBJ2 = new Vehicule()	;