<?php

$name = "Jaydeep is a good boy";
echo $name;
echo "<br>";

echo "The Lenght " . "of string is:" . strlen($name);
echo "<br>";
echo "Number of words "."in the string is:".str_word_count($name);
echo "<br>";
echo "The reverse dtring is:".strrev($name);
echo "<br>";
echo "is starts from:".strpos($name,"is");
echo "<br>";
echo "Replaced string is:" , str_replace("Jaydeep","Shubham",$name);
echo "<br>";
echo "Repeated string starts from here:". str_repeat($name,3);
echo "<br>";
echo "<pre>";
echo "trim from right side:" . rtrim("   this is a good boy   ");
echo "<br>";
echo "trim from left side:" . ltrim("   this is a good boy   ");
echo "</pre>";

?>