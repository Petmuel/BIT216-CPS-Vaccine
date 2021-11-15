<?php
    include_once 'db.php';
    //Han Vui Ern Samuel B1700483
    if (isset($_GET['confirm'])) {
        //get vaccinationID from current vaccination
        $vaccinationID = $_GET['vID'];                     
        //Check existing user
        $sql = "UPDATE tb_vaccinations SET status='In Progress' where vaccinationID='$vaccinationID';";
        $result = mysqli_query($conn,$sql);

        echo '<script>alert("You have successfully confirmed the vaccination appointment");window.location.href = "vaccination.php";</script>';
        exit();
        
    }

    if (isset($_GET['record'])) {

    }