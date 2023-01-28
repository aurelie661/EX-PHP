<?php

$myfile=fopen("C://Users/Liyah/Documents/php/client.txt", "r");
$content=fread($myfile,filesize("C://Users/Liyah/Documents/php/client.txt"));
echo $content;
fclose($myfile);
