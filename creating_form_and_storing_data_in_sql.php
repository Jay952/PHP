<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Get and Post</title>
  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Get/Post</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/SHUBHAM/get_post.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>







<div class = "container mt-3">
      <h2> Please Enter Your Email address and Password! </h2>
     <form action = "/SHUBHAM/creating_form_and_storing_data_in_sql.php" method = "post">
             <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" name = "email" class="form-control" id="email" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
             </div>


             <div class="form-group">
               <label for="pass">Password</label>
               <input type="password" name = "pass" class="form-control" id="pass">
             </div>




  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>












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









if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    


//Submit this to a database


  $sql = "INSERT INTO `emails_and_passwords` (`S.NO.`, `Email`, `Password`) VALUES (NULL, '$email', '$password');";
  echo "<br>";
  $result = mysqli_query($conn, $sql);
  
  if($result){
      echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Congratulations!</strong> Your email '. $email .' and password '. $password .' is submitted!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
  else{
      echo "The DataBase is not inserted succesfully because of this error " . mysqli_error($conn) . "<br>";
  }
  

}
?>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>