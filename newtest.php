<?php

function cssinc()
{
  static $csscount = 0;
  echo $csscount.'<br>';
  $csscount++;
}
function fileinc()
{
  static $filecount = 0;
  echo $filecount.'<br>';
  $filecount++;
}
cssinc();
fileinc();
cssinc();
fileinc();
cssinc();
fileinc();
cssinc();
fileinc();
cssinc();
fileinc();
cssinc();
fileinc();
?>


