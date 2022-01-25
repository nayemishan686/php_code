<?php
//nested array
$foods = [
    'vegetables' => explode(', ','brinjal, carrot, capsicum'),
    'fruit' => explode(', ','banana, apple, orange'),
    'drink' => explode(', ','Water, Milk')
];

// array_push($foods['drink'],'Orange-Juice');
// print_r($foods);
echo $foods['fruit'][2];
echo PHP_EOL;

//another array
$sample1 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444,[1,2,3,4,5,6]],
];
echo $sample1[2][4][4];

//another 
$sample = [
    'test' => [
        'testagain' => [
            'a',
            'b',
            'c'
        ],
    ],
];
echo $sample['test']['testagain'][2];