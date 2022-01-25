Dumb Code:
<?php
for($n=1; $n<=10; $n++){
    $factorial = 1;
    for($i=$n; $i>1; $i--){
        $factorial = $factorial*$n;
    }
    echo "The factorial of {$n} is {$factorial}\n";
}
?>

Smart Code:
<?php
    $factorial=1;
    for($n=1; $n<=10; $n++){
        
        $factorial = $factorial*$n;
        echo "The factorial of {$n} is {$factorial}\n";

    }
?>