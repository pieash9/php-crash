<?php 


// $posts = [
//     "first post",
//     "second post",
//     "third post"
// ];

// for($x = 0; $x < count($posts); $x++){
//     echo $posts[$x];
// }

// foreach($posts as $index => $post){
//     echo $index + 1 . " => " . $post;
// }

$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];

foreach($person as $key => $value){
    echo $key . " => " . $value . "<br/>";
}

?>