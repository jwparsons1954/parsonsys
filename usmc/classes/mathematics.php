<?php

class mathematics{

/*** a  number ***/
private $num;

/**
*
* Set the value of $num
*
* @access public
*
* @param $num The number to set
*
* @return int
*
**/
public function setNum($num){
$this->num = $num;
}

/**
*
* Add two to a number
*
* @access public
*
* @return int
*
**/
public function addTwo(){
return $this->num+2;
}

}/*** end of class ***/

/*** Instantiate a new class instance ***/
$math = new mathematics;

/*** set the value of the number ***/
$math->setNum(2);

/*** call the addTwo method ***/
echo $math->addTwo();

?>
