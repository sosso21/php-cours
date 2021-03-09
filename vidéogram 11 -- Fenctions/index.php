<?php 
/* 
	Les Fenctions : // partie 1 //

	   -- Exemple : gettype($Var); ---> int
	  nom de la fenction  : gettype
	  rôle de la fenction : determiner le type de var
	  le parametre (argument) : $var
	  le resultat : int


	Crée sa fenction : // partie 2+3   //

	   function nom(parametre) { instruction  }
	   !! les variables sont perdu apres la fin de fenctions
	   !!............!!
	   !! on peut faire un passage par valeur :
	   !! pour les garder metre à la fin un "return"
	   !! // partie 4 //
	   !!--------------!!
	   !! passage par réference :
	   !! on met un & sur nm_function(&$var)
	   !! voir // partie 6
	   !!----------------!!
	   !! on peut changer le type de var dans fenction
	   !! on a qu'a mettre nom_fen(type $var)
	   !! int , bol , flot , string : fUnction nom(int $var)
	   !!---------------!!
	   !! qd on as une infinitée de parametre:
	   !! on met ... avant le parametre
	   !! fUnction nom(...$lot_of_vvar)
	   !! // partie 7 //
	   !!------------------!!
	   !! pour forcer le retour d"un type
	   !! fUnction ma_fenction($var):int | string { ..... }
	   !! //  partie 7 //
	   !!-------------------!!


	 Crée une multi-fenction :
		 Exemple : //  partie 5//


		

*/

// partie 1 : // 
$var = 21 ;
echo  gettype($var);

// partie 2 //
function raligne() //c fUnction .. pas fEnction//
{
  echo "<br>";
}
raligne();

// partie 3 //

function hi($nom)
{
	echo "hello " .$nom ;
}
hi("sofiane");



raligne();
//partie 4 //

function modify_var($var)
{
	$var = "ok";
	return $var;

}
echo modify_var($var);



raligne();
//partie 5 //

function multifenction($nim1 , $num2)
{
	return $nim1 + $num2 + 5 + 6 ; // + other_fention()
}

echo multifenction(1 , 2);


raligne();
// partie 6 : passage par réference //
function chvar(&$var2)
{
	$var2 = 6;
}
 chvar($var2);
echo $var2;


raligne();
// partie 7 //
function infinie(...$argument) 
{
	foreach ($argument as $data )
	 {
		echo " ". $data;
	}
}

echo infinie(1);
raligne();
echo infinie(3,4);

// le input de php ..ca marche pas sur un nav
// juste sur un cmd
$note = readline('rentrez la note ');
if ($note>= 10)  
	echo "vous avez la moyenne ";
else
	echo "vous n'avez pas la moyenne  ";



?>