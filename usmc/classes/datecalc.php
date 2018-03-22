<?php
		class datecalc
{
			public $Begindate = $_POST['var1'];
			public $Enddate  = $_POST['var2'];
			public $interval;
			public function doMath ('var1','var2')
	{
		if ($Begindate<> date("Y-m-d")) 
		{
			$Begindate=date_create(date($var1));
		}
			$Enddate = date_create(date("Y-m-d"));
		if ($Enddate<> date("Y-m-d")) 
		{
			$Enddate=date_create(date($var2));
		}
			$interval = date_diff($Begindate, $Enddate);
			echo $interval;
return $interval;
	}
}