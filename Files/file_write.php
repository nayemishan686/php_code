<?php
    //Where i will write thats location
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/write.txt";
    if(is_writable($filename)){
    //Use to take old files so that existing files cannot be removed
    //$oldData = file_get_contents($filename);

    //use to open the file
    $fp = fopen($filename, 'w');
    
    //Use to write in the file
    //fwrite($fp, $oldData);

    fwrite($fp,"Murcury\n");
    fwrite($fp,"Venus\n");
    fwrite($fp,"Neptune\n");
    

    //use to close the file
    fclose($fp);
}


?>