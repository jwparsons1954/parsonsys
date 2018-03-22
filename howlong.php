
<meta content='initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width' name='viewport'/>
<style>
 body {background-color: red;}
h1   {color: gold;}
h2   {color: black;}
p    {color: white;}
</style>
<?php
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
if ($datetime1<> date("Y-m-d")) {
	$datetime1=date_create(date($var1));
}
$datetime2 = date_create(date("Y-m-d"));
if ($datetime2<> date("Y-m-d")) {
	$datetime2=date_create(date($var2));
}
$interval = date_diff($datetime1, $datetime2);
?>
<center><br><br><br>
<?php
echo '<h1>'.'From '.$datetime1->format('l  F  jS,   Y');
echo '<br>';
echo 'Until '.$datetime2->format('l  F  jS,   Y');
echo '  is'.'</h1>'.'<br>';
echo '<h2>'.$interval->format('%r%y'.' years '.'%m'.' months and '.'%d '.' days '."<br>".'or  ');
echo number_format($interval->format("%a"))." days <br>";
?>
<a href="http://parsonsys.net/howlong.html">
    <img src="images/homepic.png" alt="Home" width="150" height="153"></a>
   
