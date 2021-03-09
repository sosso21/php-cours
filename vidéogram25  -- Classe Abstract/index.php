<?php
/*  
      Classe Abstract :

*/


Abstract class Cart
{
	Abstract protected function parler($message,$who='user1');
}

class Trapcart extends Cart
{
	public function parler($message ,$who='user1')
	{
		echo  $message . ' ... sended by -> '. $who.'<br>';
	}

}



$mycarte = new Trapcart();
$mycarte->parler('salut');

$mycarte->parler('ça va?');


$my2carte = new Trapcart();
$my2carte->parler('C regl','moh most');