<?php
//Copy by value or Deep copy
$person = [
    'fname' => 'Nayem',
    'mname' => 'Hossain',
    'lname' => 'Ishan'
];
$newperson = $person;
$newperson['lname'] = 'Nayem';
print_r($person);
print_r($newperson);


//Copy by reference or Shallow copy

$shallowPerson = &$person;
$shallowPerson ['lname'] = 'Nayem';
print_r($person);
print_r($shallowPerson);


//Data remove from a associative array
unset($person['lname']);
print_r($person);