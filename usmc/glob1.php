<?php
$txtfile = array();
foreach (glob("*.txt") as $filename) {
	$txtfile[] = $filename;
}
for ($i =0 ,$num_files = count($txtfile);$i < $num_files;$i++) {
echo "$i" . '   ' . $txtfile[$i] .'<br>';
}
?>