<?php header('Content-Type: text/javascript'); 
function returnimages($dirname="../reunion2016/") { 
   $pattern="\.(jpg|jpeg|png|gif|bmp)$"; 
   $files = array(); 
   $curimage=0; 
   if($handle = opendir($dirname)) { 
       while(false !== ($file = readdir($handle))){ 
               if(eregi($pattern, $file)){ 
                 echo 'slides[' . $curimage .']=["' . $dirname . $file . '", "", ""];' . "\n"; 
                 $curimage++; 
               } 
       } 

       closedir($handle); 
   } 
   return($files); 
} 

echo "var slides=new Array();" . "\n"; 
returnimages(); 
?>