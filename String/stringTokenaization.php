<?php 
    $data = "My parents is my jannat";
    $data2 = "My parents is my Jannat, and they are my best friends";
    //only for words
    //explode function use for coverting sting to array
    $exploding = explode(' ', $data);
    print_r($exploding);
    //join(); function use for coverting array to string
    $joinings = join(' ', $exploding);
    echo $joinings;
    echo PHP_EOL;
    //implode(); function use for coverting array to string
    //it is allias of join() function
    $imploding = implode(' ', $exploding);
    echo $imploding;

    //this is use for letter
    //str_split(); function use for coverting string to array
    $splitings = str_split($data);
    print_r($splitings);
    //join(); function use for coverting word array to string
    $split_joinings = join($splitings);
    echo $split_joinings;

    //strtok(); function use for coverting string to array with multiple delimiters
    //but you can't count when you useing strtok() function
    $mdelements = strtok($data2, " ,");
    while ($mdelements !== false) {
        echo $mdelements ."\n";
        $mdelements = strtok(" ,");
    }

    //You can also use regex to convert strings to arrays and it will help to count the number of items
    //Now we will use preg_split() function
    $mdelements1 = preg_split("/ |,/", $data2);
    print_r($mdelements1);
    //ALhamdulillah done
    








?>