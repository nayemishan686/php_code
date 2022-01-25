<?php
$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array('a' => 'Apple', 'b' => 'orange', 'f' => 'coconut');
$fruits2 = array('a' => 'strawberry', 'c' => 'grapes', 'g' => 'orange');

//array_intersect() check intersection
$commonN = array_intersect($numbers1, $numbers2);
print_r($commonN);

//array_intersect_assoc() check intersection and key
$commonF = array_intersect_assoc($fruits1, $fruits2);
print_r($commonF);

//array_diff() check difference
$diffN = array_diff($fruits1, $fruits2);
print_r($diffN);

//array_diff() check difference and key
$diffF = array_diff_assoc($fruits1, $fruits2);
print_r($diffF);
