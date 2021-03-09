<?php 
/* 
    Opérateur aréthmetique:    + - *
    division integral     : $divisionint = intdiv(num1, num2) ;
    le modulo (reste de division) ::$modulo = 25 % 34 
                                  : $       = fmod(100 , 34 ) ;
    les puissence         :  $puissence =  3**2;
    num3 = num3 + 3       :  $num += 3;  *=  -= /= ;
                          :  $num++;--->$num = $num + 1
    $var1=A;echo "bonjour"$var1 ----> bonjourA
    $var1 ,= B ; echo $var1 --------> AB
    operateur logique      :  and  && || or  xor


*/ 
$num1 = 21;
$num2 = 9;
$addition = $num1 + $num2 ;

echo "le resultat  de l'add est ". $addition  ;
$divisionint = intdiv(num1, num2) ;
echo "<br> le result de div int est ". $divisionint . "<br>";

$lemodulo = fmod(2100, 34) ;
echo "le modulo de 100 / 34 est ".$lemodulo."<br>" ;
$puissence =  3**2;
echo "3 puissence 2 = ".$puissence. "<br>" ;
$num3 = 5;
$num3 += 3; 

?>