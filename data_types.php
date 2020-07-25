<?php

$stream = "Engineering";

/* php data types:
1. String 
2. Integer
3. Float
4. Boolean
5. Array
6. NULL
7. Object
*/

// strings
$name = "Jaydeep";
$friend = "mayank";
echo "$name and $friend are good friends<br>";

//Integer
$income = 455 ;
$debts = -655 ;
echo "$income <br>";
echo "$debts <br>"; 

//Float - decimal point
$income = 455.45;
$debts = -655.999 ;
echo "$income <br>";
echo "$debts <br>"; 
// Boolean

$x = true;
$is_friend = false;

echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Intances of classes
// Employee is a class(Template) and Jaydeep can be an object

//Array- Used to store multiple values in a single variable continously

$friends = array("Jaydeep","Mayank","Harshit","Anuj","Amit","Tejas");
echo $friends;
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];
echo "<br>";
echo $friends[5];
echo "<br>";
echo $friends[6];
echo "<br>";


//NULL
$Name = NULL;
echo var_dump($Name);


?>