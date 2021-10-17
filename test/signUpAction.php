<?php 
  session_start();
  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $dbName = "Covax";
  // Create connection
  $con = mysqli_connect($servername, $db_username, $db_password, $dbName);

  $fullName = $_POST['fullName'];
  $userID = $_POST['userID'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $_SESSION['isExistMessage'] = "";

  $qu ="SELECT * FROM users WHERE username='$username';";
  $check = mysqli_query($con,$qu);
  if(mysqli_num_rows($check)==0){ // create patient
    $script = "insert into users values ('$userID','$fullName','$username','$password', '$email','Patient', '')";
    $result = mysqli_query($con, $script);
    header('location: /BIT301_Aug2021/src/pages/home.html');
  }
  else{ // do not create patient, make alert message to be displayed in view
    $_SESSION['isExistMessage'] = '<script>alert("Failed, this IC/Passport No already exists.");</script>';
  }
  


?>