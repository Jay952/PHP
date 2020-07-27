<?php

/* Ways to connect to a MySQL database
1.MySQL extension
2.PDO
*/
//Connecting to a Database

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
$sql = "SELECT * FROM `emails_and_passwords`";

$result = mysqli_query($conn, $sql);

if($result){
    echo "The Table is selected succesfully<br>";
}
else{
    echo "The Table is not selected succesfully because of this error " . mysqli_error($conn) . "<br>";
}


//Find the number of reords returned
echo "The number of rows in the dataset is :" . mysqli_num_rows($result) . "<br>";
$num = mysqli_num_rows($result);

if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row) . "<br>";



    while($row = mysqli_fetch_assoc($result)){

        //  echo var_dump($row) . "<br>";
        echo $row['S.NO.'] . "--------" .  $row['Email'] . "--------" . $row['Password'] . "<br>";





 }








}



?>