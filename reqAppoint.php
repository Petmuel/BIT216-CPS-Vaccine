<?php
    session_start();
    //check if the admin has clicked the 'Record' button or not
    if (isset($_GET['submit'])){
        //then include the database connection
        include_once 'db.php';
    //get data from the record vaccine batch form
        //get vaccineID from current admin
        $batchNo = $_GET['batchNum'];
        $appointDate = $_GET['appointmentDate'];   
        $sql = "SELECT * FROM tb_batches WHERE batchNo = '$batchNo';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $batchNum = $row['batchNo'];
        $aQuantity = $row['quantityAvailable'];

        //insert data input into vaccine batch table
        $sqlQuery = "INSERT INTO `tb_vaccinations` (`batchNo`, `appointmentDate`, `status`) VALUES('$batchNum', '$appointDate','Pending')";

        // Execute the query
        if ($conn->query($sqlQuery) == TRUE ) {
            //redirect back to same page with a message that shows admin has successfully recorded the vaccine batch
            header('Location: requestVaccine.php?message=You have successfully requested a vaccination appointment');
        }
        else {
            echo '<script>alert("Request failed, please try again");window.location = "requestVaccine.php";</script>';
        }                               
        
        $updatedAvQuantity = $aQuantity - 1;
        $sqlQueryUpdateAv = "UPDATE `tb_vaccinations` SET `quantityAvailable` = `$updatedAvQuantity` WHERE `batchNo` = `$batchNum`";
        exit();
    }
    
    else{
        header("Location:requestVaccine.php");
        exit();
    }