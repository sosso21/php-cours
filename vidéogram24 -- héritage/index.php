<?php
/*  
      héritage :
         !! précision evoquer dans la video suivante
         pour interdir l'heritage à d'autre class fille il 
         suffit de mettre " final " avant une class ou methode 
         
*/


class Cart
{
	protected $_name;
	protected $_description ;
	
	public function __construct($name , $description)
	{
		$this->_name = $name;
		$this->_description =$description ;
	}
	public function hello()
	{
		echo "c une carte  ".$this->_name." elle as " . $this->_description ;
	}
}

final class Trapcart extends Cart
{
	private $_couleur ;

	public function __construct($name , $description , $couleur )
	{
		parent::__construct( $couleur, $name );
		$this->_description =$description ;
	}
	

	final public function hello()
	{
		echo 'je suis une carte '. $this->_name.' je vaut '. $this->_description . ' sa couleur est '.$this->_couleur ;
	}

}


$mycarte = new Cart('ace','bcp de point');
$mycarte->hello();

echo "<br>";

$mycarte = new Trapcart('joker' ,' rien ', 'rouge');
$mycarte->hello();