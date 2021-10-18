<?php

if (isset($_POST['submit'])){
    // 1. DB Server connection
    include_once 'db.php';
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];

  
    

    //Check existing user
    $sql ="insert into tb_admins (username, password, email, fullName) 
          values('$username', '$password', '$email', '$fullName');";
    mysqli_query($conn, $sql);
    echo '<script>alert("Sign up successful");window.location = "index.php";</script>';
 
}

?>
