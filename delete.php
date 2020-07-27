<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "allemails";
// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
//die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
echo "<br>";





$sql = "DELETE FROM `emails_and_passwords` WHERE `emails_and_passwords`.`Password` = 9098265008 LIMIT 3";

$result = mysqli_query($conn, $sql);
        
if($result){
            echo "The row is deleted succesfully<br>";
}
 else{
            echo "The row is not deleted succesfully because of this error " . mysqli_error($conn) . "<br>";
}
$aff = mysqli_affected_rows($conn);
echo "The number of affected rows: $aff";




?>