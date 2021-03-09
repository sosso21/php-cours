<?php
/*
    encapsulation des données :
        Accesseurs : getter : pour lire un attrbut ---> getattribut()
                     setter : modifier un attrbut  --> setattribut-()


*/
 class Vehicule 
 {
 	private $_name ;
 	private $_speed;

 	public function getname()
 	{
 		return $this->_name;
 	}

 	public function getspeed()
 	{
 		return $this->_speed;
 	}

 	public function setname(string $name)
 	{
 		if (strlen($name) > 25)
 			echo "Erreur : nom trop grand";
 		else
 			$this->_name = $name ;
 	}

 	public function gettspeed(int $speed)
 	{
 		if ($speed > 350)
 			echo "Erreur : vitesse trop grande";
 		else
 			$this->_speed = $speed ;
 	}

 	 public function __construct(string $name, int $speed)
 	{

 		$this->getname($name);
 		$this->getspeed($speed) ;
 	}

 	public function move(string $name, int $speed)
 	{
 		echo $this->_name . "se déplace a ". $this->_speed .' km/h' ;
 	}
 }

$obj3 = new Vehicule('mon chaar' , 50);
$obj3->getname();


$obj3->setname('HAFEI MOTORS');


echo $obj3->getname();