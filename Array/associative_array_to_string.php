<?php
$student = [
    'fname' => 'Nayem',
    'lname' =>'Hossain',
    'age' => 21,
    'class' => 'Diploma Last year',
    'section' => 'B'
];

echo $student['fname']." ".$student['lname']."\n";
printf("He %s years old", $student['age']);
echo PHP_EOL;

//serialized conversion
$serialized = serialize($student);
// echo $serialized;
$newStudent = unserialize($serialized);
print_r($newStudent);

//Json conversion
$jsonData = json_encode($student);
$newStudent2 = json_decode($jsonData, true);
print_r($newStudent2);
