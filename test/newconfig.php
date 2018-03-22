<!doctype html>
<! config.php >
<?php
$dbh=mysqli_connect ("localhost", "parsons1_admin", "dl07988509tx") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ("parsons1_arcdads");
?>