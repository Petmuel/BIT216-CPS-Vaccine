<?php
    session_start();   
    //then include the database connection
    include_once 'db.php';
    

    $username = $_POST['username'];
    $password =  $_POST['password'];
    //Check existing user
    $sql ="select * from tb_admins WHERE username='$username';";
    $result = mysqli_query($conn, $sql);
    
    
    //check if the admin has clicked the 'Record' button or not
    if (isset($_POST['submit'])){
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            //validate login input
            if($row['username'] == $username && $row['password'] == $password){
                $staffID = $row['staffID'];
                $_SESSION["user_name"] = $username;
                $_SESSION["staff_ID"] = $staffID;
                echo '<script>alert("Login successful!");window.location.href = "recordNewVaccineBatch.php";</script>';
                exit();
            }
            else{
                echo '<script>alert("Username or password does not match");window.location.href = "signinAdmin.php";</script>';
                exit();
            }
        }
        else{
            echo '<script>alert("Username or password does not match");window.location.href = "signinAdmin.php";</script>';
            exit();
        }
    }

?>