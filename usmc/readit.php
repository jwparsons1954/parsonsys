<?php require_once("test1.php");?>
<?php require_once("classes/readwrite.php");?>
<?php require_once("content.php");?>
<?php
$dir    = 'css';
$cssdir = glob($dir."/*.*");
$csscount = 0;
//print_r($cssdir);
$dir    = 'mycorps';
$mydir = glob($dir."/*.*");
$mycount = 0;
//print_r($mydir);
$dir    = 'ourcorps';
$ourdir = glob($dir."/*.*");
$ourcount = 0;
//print_r($ourdir);
?>

