<?php

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];

    // connection database
    $con = mysqli_connect('localhost', 'root', '', 'cpsvaccine');
    // check the connection
    if($con->connect_error)
        die(" DB Connection failed " . $con->connect_error);

    //Check existing user
    $query ="SELECT * FROM tb_admins WHERE username='$username';";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        echo '<script>alert("Username already exist");window.location = "signupAdmin.php";</script>';

    }else{
        // Insert the values into database table users
        $sqlQuery = "INSERT INTO tb_patients VALUES ('$username', '$password', '$email', '$fullName')";

        // Execute the query
        if ($con->query($sqlQuery) == TRUE ) {
            echo '<script>alert("Sign up successful");window.location = "index.php";</script>';
        }
        else {
            echo "<script>alert('sign up failed');</script>";
        }
    }
}
// Close DB connection
$con->close();

?>
    
 


?>  
//insert input in admin table
    $sql ="insert into tb_admins (username, password, email, fullName) 
          values('$username', '$password', '$email', '$fullname');";
    mysqli_query($conn, $sql);
    echo '<script>alert("Sign up successful");window.location = "index.php";</script>';