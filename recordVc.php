<?php
    //check if the admin has clicked the 'Record' button or not
    if (isset($_GET['submit'])){
        //then include the database connection
        include_once 'db.php';
        //get data from the record vaccine batch form
        $vaccine = $_GET['vac'];
        $exDate = $_GET['exDate'];
        $quantityAv = $_GET['quantityAv'];

        //insert data input into vaccine batch table
        $sql="insert into tb_batches(expiryDate, quantityAvailable)
        values('$exDate', '$quantityAv');";
        mysqli_query($conn, $sql);

        //redirect back to same page with a message that shows admin has successfully recorded the vaccine batch
        header('Location: recordNewVaccineBatch.php?message=You have successfully recorded a new vaccine batch');
        
        
        exit();
    }
    
    else{
        header("Location:recordNewVaccineBatch.php");
        exit();
    }