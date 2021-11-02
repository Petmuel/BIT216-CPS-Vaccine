<?php
    session_start();
    //check if the admin has clicked the 'Record' button or not
    if (isset($_GET['submit'])){
        //then include the database connection
        include_once 'db.php';
    //get data from the record vaccine batch form
        //get vaccineID from current admin
        $vacID = $_GET['vac'];
        $sql = "SELECT * FROM tb_vaccines WHERE vaccineID = '$vacID';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //while there is still have a row of vaccine retrieved from database
            while($row = mysqli_fetch_assoc($result)) {
                $vac = $row["vaccineName"];
            }
        }
        $exDate = $_GET['exDate'];
        $quantityAv = $_GET['quantityAv']; 

        //get staffID from current admin
        $uName = $_SESSION['user_name'];
        $sql = "SELECT * FROM tb_admins WHERE username = '$uName';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //while there is still have a row of admins retrieved from database
            while($row = mysqli_fetch_assoc($result)) {
                $staffID = $row["staffID"];
            }
        }

        //insert data input into vaccine batch table
        $sqlQuery = "INSERT INTO `tb_batches` (`expiryDate`, `quantityAvailable`, `staffID`, `vaccine`) VALUES('$exDate', '$quantityAv', '$staffID', '$vac')";

        // Execute the query
        if ($conn->query($sqlQuery) == TRUE ) {
            //redirect back to same page with a message that shows admin has successfully recorded the vaccine batch
            header('Location: recordNewVaccineBatch.php?message=You have successfully recorded a new vaccine batch');
        }
        else {
            echo '<script>alert("Record failed, please try again");window.location = "recordNewVaccineBatch.php";</script>';
        }                               
        
        exit();
    }
    
    else{
        header("Location:recordNewVaccineBatch.php");
        exit();
    }