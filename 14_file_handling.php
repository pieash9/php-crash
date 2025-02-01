<?php 


$file = "extras/users.txt";

if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
}else{
    $handle = fopen($file, "w");
    $contents = "Test 1" . PHP_EOL . "Test 2" . PHP_EOL . "Test 3";
    fwrite($handle, $contents);
    fclose($handle);
}









?>