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
<center>
<?php
echo 'From '.$datetime1->format('l  F  jS,   Y');
echo '<br>';
echo 'Until '.$datetime2->format('l  F  jS,   Y');
echo '  is'.'<br>';
echo $interval->format('%r%y'.' years '.'%m'.' months and '.'%d '.' days '."<br>".'or  ');
echo $interval->format("%a days");

