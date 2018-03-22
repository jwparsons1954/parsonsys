<?php
class One{
function other_class_test(Two $two){
echo $two->var;
}
}
class Two{

public $var="This is a variable ";
}
class NewClass
{
public $var="Another variable";
}
$one=new One;
$obj=new NewClass;
$one->other_class_test($obj);
?>