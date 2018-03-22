<?php
$var1 = $_POST['var1'];

	$datetime1=date_create(date($var1));
	$datetime2 = new DateTime('2017/05/18');


$interval = date_diff($datetime1, $datetime2);
?>
<center>
<?php


