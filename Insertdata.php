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
$database = "allemails";
// create a connrection

$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successful

if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "Connection was successfull";

}




$sql = "INSERT INTO `emails_and_passwords` (`S.NO.`, `Email`, `Password`) VALUES (NULL, 'raja101@gmail.com', '9098265008')";
echo "<br>";
$result = mysqli_query($conn, $sql);

if($result){
    echo "The DataBase is inserted succesfully<br>";
}
else{
    echo "The DataBase is not inserted succesfully because of this error " . mysqli_error($conn) . "<br>";
}







?>