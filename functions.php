<?php

echo "Welcome to the functions in php<br>";


function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $key => $value) {
        $sum = $sum + $value;
    }
    return $sum;
}


function averageMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $key => $value) {
        $sum = $sum + $value;
    }
    return $sum/6;
}




$RohanMarks = [44,34,48,45,46,39];
echo  "Total Marks of Rohan is:" . processMarks($RohanMarks) . "<br>";
echo "Average Marks of Rohan is:" . averageMarks($RohanMarks) . "<br>";




$Jaydeep = [48,49,44,50,47,49];
echo  "Total Marks of Jaydeep  is:" . processMarks($Jaydeep) . "<br>";
echo "Average Marks of  Jaydeep is:" . averageMarks($Jaydeep) . "<br>";






?>