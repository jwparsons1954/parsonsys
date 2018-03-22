<?php
include("readwrite.php");
$best = array('../mylife.txt','../Marines.txt','../where.html','../lorem.txt');
// echo "$best[0]".'    '.$best[1].'    '.$best[2];
$theone = 3;
$read = new t2t();
echo $read->read_txt($best[$theone]);
$read->read_txt($best[$theone]);