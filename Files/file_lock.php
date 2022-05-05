<?php 
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/mode.txt";
    file_put_contents($filename,"\nNewLine", FILE_APPEND);
    file_put_contents($filename, "\nHOmoework", FILE_APPEND|LOCK_EX);

?>