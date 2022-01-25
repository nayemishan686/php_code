<?php
$students = [
    "1" => "Nayem",
    "2" => "Hossain",
    "3" => "Ishan"
];
echo $students[2];
echo PHP_EOL;

foreach($students as $key => $value){
    echo $key ." = ". $value."\n";
}
echo PHP_EOL;

//foreach loop use
$foods = [
    "vegetable" => "brinjal,carrot,capsicam",
    "fruit" => "Orange, Apple, Banana",
    "drinks" => "Milk, Water"
];
foreach($foods as $key => $values){
    echo $key ." = ". $value."\n";
}
echo PHP_EOL;

//to see only array keys:
$keysi = array_keys($foods);
print_r($keysi);
echo PHP_EOL;

//to see only array values
$value = array_values($foods);
print_r($value);


//another way:
$keys = array_keys($foods);
for($i=0; $i<count($keys); $i++){
    $item = $keys[$i];
    echo $foods[$item]."\n";
}

echo PHP_EOL;
//to add a value in keys directly
$foods["drinks"] .= ", Orange Juice";
$values = array_values($foods);
for($i=0; $i<count($values); $i++){
    $value = $values[$i];
    echo $value."\n";
}