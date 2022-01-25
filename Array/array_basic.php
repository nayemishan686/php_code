<?php
//array started 
$students = array(
    "Nayem",
    "Hossain",
    "Ishan"
);
echo"First value showing:\n";
echo $students[0];
echo PHP_EOL;
//to watch data type with output
echo"to watch data type with output:\n";
var_dump($students);
echo"Total item of value:\n";
echo count($students);
echo PHP_EOL;
 //showing out put using for loop
 echo"All array item show using for loop:\n";
$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;
echo PHP_EOL;
//another way to declare array
$studentsAnother = [
    "Hridoy",
    "Arafat",
    "Akash"
];
echo $studentsAnother[0];
echo PHP_EOL;
echo"All array item show by decreasing mood:\n";
$sA = count($studentsAnother);
for($i=$sA-1; $i>=0; $i--){
    echo $studentsAnother[$i]."\n";
}

