<?php
class candy{
/*** declare a property ***/
public $type='chocolate';
/*** a normal method ***/
public function wrap(){
echo 'Its a wrap';
}
 /*** our __set() function ***/
 public function __set($index, $value){
 echo 'The value of '.$index.' is '.$value;
 }
 }  /*** end of class ***/
 /*** a new candy object ***/
 $candy = new candy;
 /*** set a non existant property ***/
 $candy->bar = 'Blue Smarties';

 ?>
