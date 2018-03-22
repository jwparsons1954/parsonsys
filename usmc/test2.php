<?php
class NumberDays
{
    public $firstFate = "date("Y-m-d")";
    
    public function __construct($firstDate)
    {
        $this->firstDate = $firstDate;
    }
}

$days = NumberDays("2015-10-07");
echo $firstDate->firstDate;
?>