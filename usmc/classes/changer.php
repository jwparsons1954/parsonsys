<!DOCTYPE html>
<html lang="en">
<?php 
include ("readwrite.php");
$theone=3;
?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, ">
<link rel="icon" type="[MIME TYPE]" href="images/usmc1_flag.gif" />
<link href="new3.css" rel="stylesheet" type="text/css"> 
<title>Marine Corps</title>
</head>
<body>
<?php

$best = array('../mylife.txt','../Marines.txt','../where.html','../lorem.txt');
echo $best[$theone];
$read = new t2t();

$read->read_txt($best[$theone]);
echo $theone;
?>
<script>
function myFunction() {
    location.reload(true);
}
</script>

<input type="button" id="C2" value="css" onclick="<?php $capnum=$capnum+1;?>" />
<input type="button" id="C2" value="file" onclick="<?php $theone=$theone+1;if ($theone ==4){
	$theone=0;
} 
echo $capnum;
echo $best[$theone];?>" />
<button onclick="myFunction()">Reload page</button>

</body>
</html>