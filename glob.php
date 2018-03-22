<?php
$cssfile = array();
foreach (glob("*.css") as $filename) {
	$cssfile[] = $filename;
}
for ($i =0 ,$num_files = count($cssfile);$i < $num_files;$i++) {
	echo "$i" . '   ' . $cssfile[$i] .'<br>';
} 
?>