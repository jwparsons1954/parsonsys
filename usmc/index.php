<?php require_once("main.html");?>
<?php require_once("header1.html");?>
<?php require_once("footer.html");?>
<?php require_once("readwrite.php");?>

<body>
<br><br><br><br><br><br><br>

<?php
echo $count.'<br>';
echo $dir.'<br>';
$read = new t2t();
echo 'filename is   '.$filnam.'<br>';
$read->read_txt($dir.'/'.$files1["$count"]);
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>
		