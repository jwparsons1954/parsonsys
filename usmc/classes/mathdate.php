<?php
class MathDate
{	private $begindate = '0001-01-01';
	public $enddate = '0002-02-02';
}
var_dump(MathDate);
// echo MathDate->$FirstDate;
// $member->username = "Fred";
// echo $member->username;  

$begindate = new MathDate();
$MathDate->begindate = '0001-01-03';
$MathDate->enddate = '0002-02-03';
echo "Beginning date  ".$MathDate->begindate."  Ending date  ";
echo $MathDate->enddate;