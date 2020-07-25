<?php


$a = 45;
$b = 78;
echo $a+$b;
echo "<br>";

//Arithmetic Operators
echo "For a +b result = " . ($a +$b);
echo "<br>";

echo "For a - b result = " . ($a - $b);
echo "<br>";

echo "For a * b result = " . ($a*$b);
echo "<br>";

echo "For a/b result = " . ($a/$b);

echo "<br>";
echo "For a % b result = " . ($a%$b);

echo "<br>";
echo "For a**b result = " . ($a**$b);

echo "<br>";


// Assignment operators
$a += 6;
echo "Since a+=6 the value of a becomes:".$a;

echo "<br>";
$a -= 6;
echo "Since a-=6 the value of a becomes:".$a;

echo "<br>";
$a *= 6;
echo "Since a *= 6 the value of a becomes:".$a;

echo "<br>";
$a /= 6;
echo "Since a /= 6 the value of a becomes:".$a;
echo "<br>";

// Comparison Operators
$x =7;
$y =9;

echo "For $x == $y result = " ;
echo  (var_dump($x == $b));
echo "<br>";

echo "For $x >= $y result = " ;
echo  (var_dump($x >= $b));
echo "<br>";

echo "For $x <= $y result = " ;
echo  (var_dump($x <= $b));
echo "<br>";

echo "For $x > $y result = " ;
echo  (var_dump($x > $b));
echo "<br>";

echo "For $x < $y result = " ;
echo  (var_dump($x < $b));
echo "<br>";

echo "For $x != $y result = " ;
echo  (var_dump($x != $b));
echo "<br>";

// Logical operators

$m = true;
$n = false;

echo "Given m=true, n=false then for m and n result: ";
echo var_dump($m and $n);
echo "<br>";

echo "Given m=true, n=false then for m or n result: ";
echo var_dump($m or $n);
echo "<br>";

echo "Given m=true, n=false then for m && n result: ";
echo var_dump($m and $n);
echo "<br>";

echo "Given m=true, n=false then for m || n result: ";
echo var_dump($m and $n);
echo "<br>";

echo "Given m=true, n=false then for !m result: ";
echo var_dump(!$m);
echo "<br>";



?>