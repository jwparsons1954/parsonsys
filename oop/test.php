<?php 
// Code Without error and proper way 
class human { public $gender;
 public function __construct($gender) { $this->gender = $gender;
 // echo self::get_gender();
 } public function get_gender() { return $this->gender;
 } } class person extends human { // public $name;
 // public $surname;
 public static $name;
 public static $surname;
 public static function set_name($name) { // $this->name = $name;
 self::$name = $name;
 } public static function set_surname($surname) { // $this->surname = $surname;
 self::$surname = $surname;
 } public static function get_name() { // return $this->name;
 return self::$name;
 } public static function get_surname() { // return $this->surname;
 return self::$surname;
 } } $Johnny = new person('male');
 $Johnny->set_name('Johnny');
 $Johnny->set_surname('Williams');
 echo $Johnny->get_name().' '.$Johnny->get_surname().' is a '.$Johnny->get_gender();
 echo "<br>";
 $Mary = new person('female');
 $Mary->set_name('Mary');
 $Mary->set_surname('Williams');
 echo $Mary->get_name().' '.$Mary->get_surname().' is a '.$Mary->get_gender();
 