<?php 
/*   
  conditions :

       if  var ==15 { echo " c cool le zain"} 
     sinon si  : elseif
      else : alors (c'est un sinon de fin)
        voir fenction 1
      switch($var){   case $vaar=n ; echo"###";break
                      case $var=n+1 ; echo"####"; break ;
                      default; echo'cas par defaut' ;break ;
                    } voir 38:00
     Ternère: voir fenction 2
     voir si une variable existe : if (isset($var)) 
     ou sinon $verification = $variable ?? "is NOT existe" ;
                echo $verification ;


       fenction usuels:

       if (gettype($A)== .... )
       if (is_bool(var));
      	if (is_float(var));
      	if (is_integer()) ; ----> if (is_int()) ;
      	if (is_string()) ;
      	---> on peut aussi utiliser ===  | == | !==
      	---> voir fenction 3 ou la fin de la video 



      comparaison:

      == egalité : if $number == 14
      === egal en valeur et en type:
      != n'est pas egal
      !==  differrent en val ou en type
      < >  <= >= inferieur superieur 
      <=> eceque c  sup ou inf ou = : ca ressort 0 -1 1 

*/ 

       // téma ou on met les ";" //
       $yearofbirth = 1998;
      $actualyear = 2019;
      $age = $actualyear -  $yearofbirth ;

      if ($age < 18 )
      	 echo "retourne chez ta mere" ;
    elseif ($age >18) 
    	 echo "c réglé ";
    	else 
    		echo"c cool t'a 18 ans ";
          echo "<br>";

       // Ternère est comme ce qui  suit //

      $ilfebo = true ; // ou $ilfebo = 1//

      $message = "" ;
      
      $message = ($ilfebo) ? "met tes LDS " : "Sortez Couvert les KHEY";
      echo $message;
      /*
      //au lieu de faire un  //
      if($ilfebo) //contraire --> if(!$ilfebo) 
      	  $message = "Met tes LDS";
      	else $message = "sortez couvert les khey";
      	echo $message ;
      	*/ 
      	echo "<br>";
      	//fenction 3 //
      	$A = 14;
      	$B = 15 ;

      	if (is_int($A) ==is_int($B)) 
      		echo "C pareil";





?>