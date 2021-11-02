<?php

if (isset($_POST['submit'])){
    //then include the database connection
    include_once 'db.php';

    // check the connection
    if($conn->connect_error)
        die(" DB Connection failed " . $conn->connect_error);

    $username = $_POST['username'];
    $password =  $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $centre = $_POST['centre'];

    //Check existing user
    $query ="SELECT * FROM tb_admins WHERE username='$username';";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        echo '<script>alert("Username already exist");window.location = "signupAdmin.php";</script>';

    }else{
        // Insert the values into database table users
        $sqlQuery = "INSERT INTO `tb_admins`(`username`, `password`, `email`, `fullName`, `centre`) VALUES ('$username','$password','$email','$fullname','$centre')";

        // Execute the query
        if ($conn->query($sqlQuery) == TRUE ) {
            echo '<script>alert("Sign up successful");window.location = "index.php";</script>';
        }
        else {
            echo '<script>alert("Sign up failed, please try again");window.location = "signupAdmin.php";</script>';
        }
    }
}
// Close DB connection
$conn->close();

?>
    
 

<!--
?>  
//insert input in admin table
    $sql ="insert into tb_admins (username, password, email, fullName) 
          values('$username', '$password', '$email', '$fullname');";
    mysqli_query($conn, $sql);
    echo '<script>alert("Sign up successful");window.location = "index.php";</script>';
-->