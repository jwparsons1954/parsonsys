<?php class my_class{
 public function foo() {
    return "This is the foo function";
 }
  /*** __call() method with two args ***/
  public function __call($method, $arg){
   echo $method.'';
   print_r($arg);
 }
} /*** end of class ***/

/*** create a new class object ***/
$obj = new my_class;
/*** call a non-existant method ***/
$obj->bar("arg1", "arg2");
?>
