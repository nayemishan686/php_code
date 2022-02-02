<?php 
    //There has total 128 characters in ASCII code
    //To see a character ASCII position you can use This
    $seePosition = ord('A');
    echo $seePosition;
    echo PHP_EOL;

    // To see which characters has this ASCII position you can use This
    $seeWord = chr(91);
    echo $seeWord;
    echo PHP_EOL;

    //Print all ASCII characters
    for($i= 0; $i<= 127; $i++){
        $asciiCharacter = chr($i);
        echo $asciiCharacter;
        echo PHP_EOL;
    }


?>