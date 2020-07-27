<?php

$servername = "localhost";
$username = "root";
$password = "";

// create a connection

$conn = mysqli_connect($servername, $username, $password);

//die if connection was not successful

if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "Connection was successfull<br>";

}




// creating a Database
$sql = "CREATE DATABASE pjSnake";
$result = mysqli_query($conn, $sql);

if($result){
    echo "The DataBase is created succesfully<br>";
}
else{
    echo "The DataBase is not created succesfully because of this error " . mysqli_error($conn) . "<br>";
}


?>