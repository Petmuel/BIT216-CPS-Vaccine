<?php
     
    //check if the admin has clicked the 'Record' button or not
    if (isset($_POST['submit'])){
        //then include the database connection
        include_once 'db.php';
        $username = $_POST['username'];
        $password =  $_POST['password'];

        //Check existing user
        $sql ="select * from tb_admins WHERE username='$username' and password='$password';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        //validate login input
        if($row['username'] == $username && $row['password'] == $password){
            echo '<script>alert("Login successful! Welcome");window.location.href = "recordNewVaccineBatch.php";</script>';
            exit();
        }
        else{
        // Insert the values into database table users
        echo '<script>alert("Username or password does not match");window.location.href = "signinAdmin.php";</script>';
        exit();
        }

    }
?>
