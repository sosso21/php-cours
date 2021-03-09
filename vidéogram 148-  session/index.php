<?php
/*
   Les Session: !! mettre avant tout html
     session_start()     : début de session
     session_destroy()   : fin de session 
     session_id()        : identifiant de session
     session_regenerate_id() : reganerer id  de session
      session_unset()     : detruire les variables de session
      session_write_close()   : supprimer la session
      session_name()      : récuperer ou modifier le nom de la session
      session_status()        :  --> 0  non existant
                                 --> 1  elle existe mais  on utulisé
                                 --> 2 utilisée actuelemnt

     header('location:wolf.php') : rediriger vars une autre page

      les variables super global:
      $_SESSION
     $PHPSESSID

        !!! il y as des parametres de sécu 
        à respecterxD regarder la video : https://www.youtube.com/watch?v=UgJ21BAt-y0&list=PLrSOXFDHBtfFuZttC17M-jNpKnzUL5Adc&index=18&pbjreload=10 
        !!



*/
if (!session_id())
 {
	session_start();
	session_regenerate_id(true);
}


 $_SESSION["username"] = 'sofiane';
 echo htmlspecialchars($_SESSION["username"])  ;


 // faiire des trucs abec la session

session_unset();
session_destroy();
session_write_close();
setcookie(session_name()," ",0 , null , null ,false , true );
session_regenerate_id(true);
//header('location:wolf.php');
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

?>