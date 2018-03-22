<?php

foreach (glob('/home3/parsons1/public_html/*.txt') as $filename) {
   //echo "$filename" . "<br>";
	$textfile[] = $filename;
}

/*for ($i =0 ,$num_files = count($textfile);$i < $num_files;$i++) {
	echo "$i" . '   ' . $textfile[$i] .'<br>';
} */
// $menu = implode ('<br>', $textfile);
print '<tr><td>' . implode ('<td><br><td>', $textfile) .'</td></tr>';


