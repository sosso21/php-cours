<?php
/*  
     Classe abstract :une classe qui ne s'instencie pas
                      ca factorise du code

      Interface       : API
                        fournit un contrat de service 
      
      une classe peut inplementer plusieur interface
      une classe ne peut qu'etendre qu'une seul classe
*/

Interface IArticle
{
	const NB_DE_PAGE_MAX =15;
	public function save($auteur , $contenue);
	public function delete();
	public function creat();
	public function share();
	public function getvideo($url);
}

Interface IMessages
{
	public function sms($texto);
}
 
class Blogarticle implements IArticle, IMessages
{
	public function sms($texto)
	{
		echo $texto;
	}

	public function save($auteur , $contenue)
	{
		echo $contenue.' redige par '.$auteur;
	}
	public function delete()
	{
		echo "delete ";
	}
	public function creat()
	{
		echo "Create";
	}
	public function share()
	{
		echo "share";
	}
	public function getvideo($url = 'www.youtube.com')
	{
		echo 'voila la video'.$url ;
	}
}

$oobj = new Blogarticle();
$oobj->save('sofiane','allalalalala');

echo "<br>";
$oobj2 = new Blogarticle();
$oobj2->getvideo();


echo "<br>";

echo IArticle::NB_DE_PAGE_MAX;