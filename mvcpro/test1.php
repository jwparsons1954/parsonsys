<?php
$info = new SPLFileInfo('/mylife.txt');
// Prints 'mylife.txt'
echo $info->getFilename().PHP_EOL;
// Prints /mvcpro
echo $info->getPath().PHP_EOL;
// Prints '/mvcpro/mylife.txt'
echo $info->getPathName().PHP_EOL;
// Prints bool(false)
var_dump($info->isDir());
// Prints each line with its line number
foreach ($file as $line_num => $line) {
    // Note that $line includes the line-ending
    echo "$line_num: $line";
}