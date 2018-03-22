<?php
$dir = "../reunion2016/";
$pics = array(key,value);
$count = 0;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		if ($file !='.' and $file !='..')
		{echo "filename:" . $file . "<br>";
			$pics=$file;
			$count++;
	
		}
    }
    closedir($dh);
  }
}
//foreach ($pics as $value) {
//    echo "$value <br>";}
if (is_dir($pics))
{
    if ($handle = opendir($pics))
    {
        while($file = readdir($handle) !== FALSE)
        {
            $results_array[] = $file;
        }
        closedir($handle);
    }
}
?>