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





$sql = "SELECT * FROM `emails_and_passwords` WHERE `Password` = 12345 ";

$result = mysqli_query($conn, $sql);

if($result){
    echo "The Table is selected succesfully<br>";
}
else{
    echo "The Table is not selected succesfully because of this error " . mysqli_error($conn) . "<br>";
}

echo "The number of rows in the dataset is :" . mysqli_num_rows($result) . "<br>";
$num = mysqli_num_rows($result);

if($num > 0){
    $no =1;
    while($row = mysqli_fetch_assoc($result)){

        //  echo var_dump($row) . "<br>";
        echo $no . "--------" .  $row['Email'] . "--------" . $row['Password'] . "<br>";
        $no = $no+1;

                                             }
        }


$sql = "UPDATE `emails_and_passwords` SET `Password` = '12345' WHERE `emails_and_passwords`.`Password` = 'abcd'";

$result = mysqli_query($conn, $sql);
        
if($result){
            echo "The row is updated succesfully<br>";
}
 else{
            echo "The row is not updated succesfully because of this error " . mysqli_error($conn) . "<br>";
}
$aff = mysqli_affected_rows($conn);
echo "The number of affected rows: $aff";




?>