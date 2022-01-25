<?php
$students = [
    "Rahim",
    "Karim",
    "Shafiq"
];

// to change opset 2 value
$students[2] = "Rakib";
$counter = count($students);
for($i=0; $i<$counter; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;
/* Four function we need remember
array_shift()
array_pop()
array_unshift()
array_push()

/*First: array_shift()
 it is generally use for removing first data from value and return in new variable;
*/
$student = array_shift($students);
$counter = count($students);
for($i=0; $i<$counter; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;

/*Second: array_pop()
 it is generally use for removing last data from value and return in new variable;
*/
$student = array_pop($students);
$counter = count($students);
for($i=0; $i<$counter; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;

/*Third: array_unshift()
 it is generally use for adding first data from value and return in new variable;
*/
array_unshift($students,"Rahim");
$counter = count($students);
for($i=0; $i<$counter; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;

//another way to add data
$students[] = "Jamal";
$counter = count($students);
for($i=0; $i<$counter; $i++){
    echo $students[$i]."\n";
}
echo PHP_EOL;
/*fourth: array_push()
 it is generally use for adding first data from value and return in new variable;
*/
array_push($students, "Rakib");
$counter = count($students);
for($i=0; $i<$counter; $i++){
    echo $students[$i]."\n";
}


















