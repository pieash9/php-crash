<?php

$string = "Hello World, My World!";

echo strlen($string);
echo "<br/>";
echo strpos($string, "e");
echo "<br/>";
echo strrev($string);
echo "<br/>";
echo strtolower($string);
echo "<br/>";
echo strtoupper($string);
echo "<br/>";
echo ucwords($string);
echo "<br/>";

echo str_replace("World", "Pieash", $string);
echo "<br/>";


echo substr($string, 0,5);
echo "<br/>";
echo substr($string, 5);
echo "<br/>";

if(str_starts_with($string, "Hello")){
    echo "Yes";
}
echo "<br/>";
if(str_ends_with($string, "!")){
    echo "Yes";
}




$string2 = '<script>alert("Hello") </script>';
echo htmlspecialchars($string2);

printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%f', 1+1);


















?>