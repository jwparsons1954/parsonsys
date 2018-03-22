<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, ">
<link rel="icon" type="[MIME TYPE]" href="images/usmc1_flag.gif" />
<link href="$cssfile[$csscount]" rel="stylesheet" type="text/css"> 
<title>popup test</title>
</head>
<body><?php
include 'attempt.php';
var_dump ($cssfile);
var_dump ($textfile);
?>
<a href="test.htm" target="pop" onclick="pop=window.open(this.href,'pop',
   'width=650,height=400');">link</a>
   <?php
   setcsscount();
   setfilecount();
   echo $csscount."   " . $filecount;
   ?>
</body>
</html>