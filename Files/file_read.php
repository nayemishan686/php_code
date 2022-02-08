<?php 
    //To show file path
    $filename = "/media/nayemishan/Web Design & Dev/Learn With Hasin Hayder/Files/read.txt";
    //Must check is readable
    if(is_readable($filename)){
    //Use for opening file
    $fp = fopen($filename, 'r');

    //Use for seeing one line output
    $line = fgets($fp);
    echo $line;

    //use this for starting from at first
    rewind($fp);

    //Usr this for starting from which line i want
    fseek($fp, 0, SEEK_SET);

    //Use loop to see all lines
    while($line = fgets($fp)){
        echo $line;
    }
    echo PHP_EOL;

    //Use this to read all lines and make it array
    $data = file($filename);
    print_r($data);

    //It is also use to read all lines at a time
    $data2 = file_get_contents($filename);
    echo $data2;


    //use for closing file
    fclose($fp);
}

?>
