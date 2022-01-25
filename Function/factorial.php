<?php

// We fond out any kind of number factorial
//1st choice

function doFactorial($n){
    if($n<=1){
        return 1;
    }
    return $n*doFactorial($n-1);
}
echo "factorial is ".doFactorial(5);
echo PHP_EOL;
?>

Another Choice:
<?php

function findFactorial($n){
    static $factorial = 1;
    if($n>1){
        $factorial *= $n;
        $n--;
        findFactorial($n);
    }
    return $factorial;
}

echo findFactorial(6);
