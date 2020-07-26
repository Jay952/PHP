<?php

echo "Welcome to local global scope variables<br>";

$a = 90;
$b = 50;//GLobal Variable
function printvalue(){
    global $a,$b;//Local variable
    echo "The value of your variable is $a,$b";
}

printvalue();
echo "<br>";
echo var_dump($GLOBALS["a"]) . "<br>";
echo var_dump($GLOBALS["b"]) . "<br>";
?>