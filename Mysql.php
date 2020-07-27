<?php

echo "Welcome , we are now connecting to a database<br>";
/* Ways to connect to a MySQL database
1.MySQL extension
2.PDO
*/
//Connecting to a Database

$servername = "localhost";
$username = "root";
$password = "";

// create a connrection

$conn = mysqli_connect($servername, $username, $password);

//die if connection was not successful

if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "Connection was successfull";

}


?>