<?php 


$numbers =  [1,2,3,4,5];


$fruits= array("apple", "banana", "orange", "kiwi", "grape");

$colors =[
 1 => "red",
 2 => "green",
 8 => "blue"
];

$hex = [
    "red" => "#f00",
    "green" => "#0f0",
    "blue" => "#00f"
];


$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];

$people =[
    [
        "first_name" => "John",
        "last_name" => "Doe",
        "age" => 30
    ],
    [
        "first_name" => "Jane",
        "last_name" => "Doe",
        "age" => 28
    ]
    
    ];

var_dump(json_encode($person))



?>