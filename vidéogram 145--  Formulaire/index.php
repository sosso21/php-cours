<p><a href="firmulaire.html">Formulaire</a><p>
<pre>
<?php
/*
  On as deux variable universels : $_GET
                                 :  $_POST
          url GET : http://localhost/result.php?=var1=14&var2=bonjour'&var3=515 

           sécuriser les failles xss : htmlspecialchars()
                                     : htmlentities()

            pour vérifier des variables : isset(); définie / existe
                                           empty(); vide
                                           is_nan(); null
                                  ATTENTION : la negation se fait
                                  comme ceci !!  ( 2 fois !! )


            !! Leurs retours :  isset() + empty()
                   ---> True :  chaine vide ""
                                False 
                                []
                                0
                                "0"
                                0.0  

            isset() ->false : null
                              $variable; //pas declaré

            empty() ->false : 
                               true
                               \0

           is_null()->false :   ""




*/

/*
echo empty($_GET['name']);
*/
if (isset($_GET["name"]) && !!empty($_GET["name"])   && isset($_GET["fname"]) && !!empty($_GET['fname']) )
 
       echo "Bienvenu " . htmlspecialchars($_GET["fname"]);
else
  echo 'une case a etait oublier ' ;

?>
</pre>
