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
        header('Location: recordNewVaccineBatch.php?message=<p class="alert alert-success">You have successfully recorded a new vaccine batch</p>');
        
        
        exit();
        /*check if input numbers are not valid
        if(!preg_match("/^[0-9]*$/", $quantityAv)){
            echo "alert('please enter numeric input on quantity available');";
            exit();
        }
        else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../index.php?signup=email");
                exit();
            }
            else{
                header("Location: ../index.php?signup=success");
                exit();
            }
        }*/
        
    }
    
    else{
        header("Location:recordNewVaccineBatch.php");
        exit();
    }