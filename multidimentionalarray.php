<?php
echo "welcome to Multidimentional array<br>";

$multidimentionalarray = array(
                              array(21,32,13,24),
                              array(15,26,27,38),
                              array(19,10,11,12),
                              array(14,15,16,17)
);
echo var_dump($multidimentionalarray) ;
echo  "<br>";
echo $multidimentionalarray[0][0] . "<br>";
echo $multidimentionalarray[1][1] . "<br>";
echo $multidimentionalarray[2][2] . "<br>";
echo $multidimentionalarray[3][3] . "<br>";


for($i = 0; $i < count($multidimentionalarray); $i++){
    for($j = 0; $j < count($multidimentionalarray[$i]); $j++){
        echo $multidimentionalarray[$i][$j];
        echo " ";
    }
    echo "<br>";
}


?>