<?php
/*
 * @package: Simple class for reading and writing files
 * @author: Doyin Faith Kasumu
 * @author URI: http://t2techblg.com 
 */
class t2t {
 
    public function write_txt($filename, $data) {
        
        //if file specified to be written already exists
         
        if (file_exists($filename)) {
            
           echo 'Please try using another name';
            
       } else {
                
        $open_txt = fopen($filename, 'w');
        $write = fwrite($open_txt, $data);
        $success_message = 'File written successfully!';
         
        echo $success_message;
         
        fclose($open_txt);
    }
   }
 
    public function read_txt($filename) {
         
        if (!file_exists($filename)) {
         
             
            //if file specified to be read does not exist
             
            echo 'File specified to be read does not exist.';
         
        } else {
 
        $open_txt = fopen($filename, 'r');
 
        while (!feof($open_txt)) {
 
            echo fgets($open_txt) . '<br>';
        }
         
            fclose($open_txt);
 
    }
  }
} 