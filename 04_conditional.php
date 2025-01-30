<?php 

$t = date("H");

if($t < 12){
    echo "Good Morning";
} elseif($t < 18){
    echo "Good Afternoon";
} else {
    echo "Good Evening";
}










?>