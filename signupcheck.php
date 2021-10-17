<?php

  $username = $_POST['username'];
  $password =  $_POST['password'];
  $email = $_POST['email'];
  $fullName = $_POST['fullName'];
  $ICPassport = $_POST['ICPassport'];

// 1. DB Server connection
  $con = mysqli_connect("localhost", "root", "", "cpsvaccine");
// check the connection
if($con->connect_error)
    die(" DB Connection failed " . $con->connect_error);

//Check existing user
$query ="SELECT * FROM tb_patients WHERE username='$username';";
$result = mysqli_query($con,$query);
 if(mysqli_num_rows($result)>0){
     echo '<script>alert("Userename already exist.");window.location = "signupPatient.php";</script>';

}else{
  // Insert the values into database table users
  $sqlQuery = "INSERT INTO tb_patients VALUES ("$username", "$password", "$email", "$fullName", "ICPassport")";

  // Execute the query
  if ($con->query($sqlQuery) == TRUE ) {
    echo '<script>alert("Sign up successful");window.location = "index.php";</script>';
  }
  else {
    echo "<script>alert('sign up failed');</script>";
  }
}

// Close DB connection
$con->close();

?>
