<?php
    //then include the database connection
    include_once 'db.php';
    session_start();
    //check if the admin has clicked the 'Record' button or not
    if (isset($_GET['submit'])){
        
        //get BatchNo from current batch
        $batchNo = $_GET['bNo'];                     
        //Check existing user
        $sql ="SELECT * FROM tb_batches WHERE batchNo='$batchNo';" ;
        $result = mysqli_query($conn,$sql);

        //check if the admin has clicked the 'Request' button or not
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $batchNum = $row['batchNo'];
            $_SESSION["batchNo"] = $batchNum;
            echo '<script>window.location.href = "vaccination.php";</script>';
            exit();
        }
        else{
            echo '<script>alert("Please select a vaccine batch before request");window.location.href = "vaccination.php";</script>';
            exit();
        }    
        
    }

    