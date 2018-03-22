<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Form</title>
    <link rel="icon" type="[MIME TYPE]" href="usmc1_flag.gif" >
    <link href="usmcstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
 

 <?php

// Capture the values posted to this php program from the text fields

// which were named 'YourName' and 'FavoriteWord' respectively



$YourName = $_REQUEST['YourName'] ;

$FavoriteWord = $_REQUEST['FavoriteWord'] ;

?>



<body bgcolor="#FFFFFF" text="#000000">

<p>



Hi <?php print $YourName; ?>



<p>



You like the word <b> <?php print $FavoriteWord; ?>!?!</b>



<p>You oughta be ashamed of yourself!


</body>

</html>