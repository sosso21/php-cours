<?php
/*
  COOKIES :
    Crée un cookie : setcookie("nom","vameur",temp de validité ,adress dde stockage, domaine ,https,securité) ;
   

*/
if (!!isset($_COOKIE['langue']) || empty($_COOKIE['langue']))
    setcookie("langue","fr",time()+3600*24*365,null,null,false,true) ;

echo "<pre>";
echo htmlspecialchars($_COOKIE['langue']);
echo "<pre>";
?>