<?php
require_once("readwrite.php");
$dir = array('mycorps','ourcorps');
print_r($dir).'<br>';
$count1 = 0;
$count2 = 2;
$files1 = scandir($dir[$count1]);
print_r($files1).'<br>';
$files2 = scandir($dir[$count2]);
print_r($files2).'<br>';
//		$count1++;
//		$count2++;	
		echo 'c1  '.$count1.'<br>';
		echo 'd1  '.$dir[$count1].'<br>';
		echo 'c2  '.$count2.'<br>';
		echo 'd1  '.$dir[$count2].'<br>';
		echo 'f1   '.$files1[$count1].'<br>';
		echo 'f2   '.$files2[$count2].'<br>';
		$read1 = new t2t();
$read1->read_txt($dir[$count1].'/'.$files1["$count1"]);
$read2 = new t2t();
$read2->read_txt($dir[$count2].'/'.$files2["$count2"]);
		?>