<?php
/*
   attributs et méthodes:

      attribut (pv) : (Proprieté) est une variable definie dans une class
       methode (pb) : `           // une function  //       //  //   // 

       link : https://www.youtube.com/watch?v=YCeS-4Z_wSk&list=PLrSOXFDHBtfFuZttC17M-jNpKnzUL5Adc&index=21
*/
 class Vehicule 
 {
 	private $_name ;// normalement c'est en private
 	 # private $_couleur; on peut mettre toutes caracterustique de Vehicule
 	 // private $_power ;
 	 public function __construct(string $name)
 	{
 		$this->_name = $name;
 	}
 	public function move()
 	{
 		echo $this->_name . "se déplace";
 	}
 }
/* si $_name est public 
$obj1 = new Vehicule("mon bolide");
echo $obj1->_name  .'<br>' ;

$obj2 = new Vehicule("Son bolide");
echo $obj2->_name  .'<br>' ;
*/
$obj3 = new Vehicule('Mon chare ');
$obj3->move();