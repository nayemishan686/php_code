<?php

/*****************
 * For Loop*******
 ****************/

for($i = 1; $i <= 10; $i++){
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;


/*****************
 * While Loop*****
 ****************/

$i = 11;
while($i <= 20){
    echo $i;
    $i++;
    echo PHP_EOL;
}

echo PHP_EOL;


/*****************
 * Do While Loop**
 ****************/

$i = 21;
do{
    echo $i;
    $i++;
    echo PHP_EOL;
}while($i <= 30);
 echo PHP_EOL;



/*****************
 * GO TO Loop*****
 ****************/

$i = 30;
a: $i++;
echo $i;
echo PHP_EOL;
if($i < 40) goto a;

echo PHP_EOL;



