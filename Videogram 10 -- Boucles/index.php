<?php 
/*   
  Les Boucles:

  Boucles simple :  while(condistion){instructions} ---> //Fenction 1 //
  Boucles Do whiles : do {instructions}while(condition): //Fenction2//
  Boucle For  : voir //Fenction 3 //
  Boucle foreach 
  contuniue , Brak :  //Fenction 4 //

  
*/

echo"--------- <br>";//Fenction 1 ///
  $var1 = 0 ;
  while ($var1 < 10) 
  {
    $var1 ++ ;
    echo "<br>". $var1 ;
  }

echo("<br>--------");//Fenction 2 //
do {
  $var1 ++ ;
    echo "<br>". $var1 ;
} while ( $var1 < 20);

echo("<br>--------");//Fenction 3 // 

for ($i=0; $i < 10 ; $i+=1)
{ 
    echo "<br> *". $i ;
}

echo("<br>----------");//Fenction 4 // 
$var2 = 0;
while( $var2 < 10)
{
  $var2++ ;
  if ($var2 = 5) 
     continue ;
  echo $var2 . "<br>";
}


?>