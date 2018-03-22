<center><h3>I have been on this planet for 
<?php
$datetime1 = date_create('1954-10-07');
$datetime2 = date_create(date("Y-m-d"));
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%r%y'.' years '.'%m'.' months and '.'%d '.' days ');
?>
<br>during that time these are the places I have lived or visited</h3></center>

<center><h3>Places in ALL CAPS are the places I actually lived (more than 2 weeks)<br> all others I only visited.</h3>
<h2>United States</h2>