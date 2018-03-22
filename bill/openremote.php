<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>United States Marine Corps</title>
    <link rel="icon" type="[MIME TYPE]" href="favicon.jpg" />
    <link href="usmcstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
    $slash = fopen("http://www.slashdot.org", "r");
    $site = fread($slash, 200000);
    fclose($slash);
    print $site;
?>
</body>

</html>