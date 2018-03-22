<?php
class setcounters{
public $csscount;
public $filecount;}
function setcsscount(){
if ($csscount > count($cssfile)){
$csscount=-1;}
}
$csscount+1;
echo $csscount."   " . $filecount;
var_dump ($cssfile);
var_dump ($textfile);
//return ($csscount,$filecount);