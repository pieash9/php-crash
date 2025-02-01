<?php

$fruits = ["apple", "banana", "orange", "kiwi", "grape"];

// get length
// echo count($fruits);
// var_dump(in_array("grape", $fruits));



// push
// $fruits[] = 'mango';
// array_push($fruits, "Title");
// array_unshift($fruits, "lemon");

// remove
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[1]);

// split into 2 chunks
// $chunk_array = array_chunk($fruits, 3);


// print_r($chunk_array)

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);

$arr4 = [...$arr1,...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1,20);
// print_r($numbers);

$newNumbers = array_map(function($number ) {
    return "Number $number";
}, $numbers);

$lessThanTen = array_filter($numbers, fn($number)=> $number < 10);

$sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number, 0 );


print_r($sum);





?>