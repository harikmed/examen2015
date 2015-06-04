<?php
class Employe extends Personne{
private $_prenom;
private $_numSecu;
	
public function __construct($prenom,$numSecu){
	$this->_prenom=$prenom;
	$this->_numSecu=$numSecu;
}
public function identifier(){
}
public function creer(){
}
public function identifier($periode=""){
}


}



?>