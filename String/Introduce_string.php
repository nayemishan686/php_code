<?php 
    //You can define string by single quotation
    // When we write a string with a single quote, it defines everything inside it as a string, even a variable.
    $question = 'What is your name?';
    echo '$question';
    echo PHP_EOL; //look at this variable it difines by '' and cant show vlaue of it
    $fString = 'My name is Nayemishan';
    echo $fString;
    echo PHP_EOL;

    //you can define string by Double quotation
    //When we write a string with a double quote, it will pass values of everything
    $sString = "This string define by Double Quote";
    echo $sString;
    echo PHP_EOL;
    echo "{$question} {$fString} \n"; //look at this variable it pass his value when we declare it by double quote

    //You can define string by heredoc . SO lets start
    $heredoc = <<<EOD
    Data 1
    new Data
    it is similar Double quote
    $fString;
    EOD;
    echo $heredoc;
    echo PHP_EOL;
    echo PHP_EOL;

    //You can define string by nowdoc . SO lets start
    $nowdoc = <<<'EOD'
    Data 2
    New Data 2
    it is similar Single quote
    $fString;
    EOD;
    echo $nowdoc;



?>