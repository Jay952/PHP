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


$SNO = "1";
$name = "Rupesh";


$sql = "INSERT INTO `employee` (`S.No.`, `Name`) VALUES ($SNO, '$name')";
echo "<br>";
$result = mysqli_query($conn, $sql);

if($result){
    echo "The DataBase is inserted succesfully<br>";
}
else{
    echo "The DataBase is not inserted succesfully because of this error " . mysqli_error($conn) . "<br>";
}







?>