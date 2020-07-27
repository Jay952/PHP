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
$database = "shubham";
// create a connrection

$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successful

if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "Connection was successfull";

}


echo "<br>"; 
//create a table 
$sql = "CREATE TABLE `employee` ( `S.No.` INT(11) NOT NULL , `Name` VARCHAR(11) NOT NULL )";

$result = mysqli_query($conn, $sql);

if($result){
    echo "The Table is created succesfully<br>";
}
else{
    echo "The Table is not created succesfully because of this error " . mysqli_error($conn) . "<br>";
}






?>