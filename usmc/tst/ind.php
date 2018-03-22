<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>John W. (Bill) Parsons</title>
    <link rel="icon" type="[MIME TYPE]" href="usmc1_flag.gif" >
    <link href="tp2.css" rel="stylesheet" type="text/css">
<?php
require_once('form.html');
require_once('diffdate.php');
?>
</head>
<body>
<p>The difference between <?php echo $datetime1->format('M-d-Y').' and '.$datetime2->format('M-d-Y');?></p>
<div class="output"><center><br>
<?php
echo $interval->format('%r%y'.' years '.'%r%m'.' months and '.'%r%d '.' days '."<br>".'or  ');
echo $interval->format("%r%a days");
?>
</div>
</body>
