<?php

echo "welcome to the associative arrays in php<br>";
$favcol = array('Jaydeep' => 'Red', 'Mayank' => 'Blue', 'Rahul' => 'Green', 'Amit' => 'Black', 'Harshit' => 'White');
echo $favcol['Jaydeep']."<br>";
echo $favcol['Mayank']."<br>";
echo $favcol['Harshit']."<br>";


foreach ($favcol as $key => $value) {
    echo "Favourite color of $key is $value<br>";
}

?>