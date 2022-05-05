<?php 
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/mode.txt";
    $fp = fopen($filename, 'r+');
    //$fp = fopen($filename, 'w+');
    //$fp = fopen($filename, 'a+');
    $line = fgets($fp);
    echo $line;
    fwrite($fp,"Fathers\n");
    $line = fgets($fp);
    echo $line;
    fclose($fp);
    
   



?>