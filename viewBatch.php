<?php
    session_start();
    //then include the database connection
    include_once 'db.php';
    
    if (isset($_GET['submit'])){
        $vac = $_GET['vaccine'];
        $centre = $_GET['centre'];
        $sql = "Select * from tb_batches where vaccine = '$vac';";
        $sql2 = "Select * from tb_admins where centre = '$centre';";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        
        if(mysqli_num_rows($result)>0 && mysqli_num_rows($result2)>0){
            //while there is still have a row of healthcare centres retrieved from database
            while($row = mysqli_fetch_assoc($result)){
                echo "staffID from batches table: ".$row['staffID']."<br>";
                $staffIDFrBatches = $row['staffID'];
                while($row2 = mysqli_fetch_assoc($result2)){
                    echo "staffID from admins table: ".$row2['staffID']."<br>";
                    
                }
                
                
                
            }
        }
    }
?>