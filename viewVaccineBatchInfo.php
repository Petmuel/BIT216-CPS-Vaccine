<?php
    include_once 'db.php';
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        body{
            background-color: rgb(232, 214, 255);
        }

        .listvacBatchBg{
            background-color:rgb(255, 216, 108);
        }

        .horizontalOverflow{
             overflow-x: auto;
        }
    </style>

    <title>View Vaccine Batch Information</title>
</head>

<body class="VVBIPage">
    <!--
        Navigation bar
        navbar-expand-sm is to see all the nav-items before the nav bar collapses
        fixed-top: to make nav bar staying on top of the page when scrolling up or down
        -->
    <nav class="navbar navbar-expand-sm navbar-dark text-light bg-dark">
        <!--to contain contents in the container in the nav bar-->
        <div class="container">
            <!--Put title and image of the website-->
            <a href="#" class="navbar-brand mb-0 h1">
                <img src="img/vaccinationIcon.png" width="45" height="auto" alt="PCVSIcon">
                PCVS
            </a>

            <!--Current admin full name is shown after logging in-->
            <text>
                <?php
                    
                    $uName = $_SESSION['user_name'];
                    $sql = "SELECT * FROM tb_admins WHERE username = '$uName';";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        //while there is still have a row of admins retrieved from database
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "Welcome, ".$row["fullName"];
                        }
                    }
                ?>
            </text>
        <!--
            To toggle the navigation bar
            data-toggle: class that will be applying toggle to 
            data-target: target will be that ID created in div tag below
            add accessible tags: aria-controls, expanded, label
            -->
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler">
            <!--Add icon for the toggle button-->
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--to ensure that this tag to have responsive design to make nav bar function properly-->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <!--scroll down to list of available vaccine (transition)-->
            <li class="nav-item">
                <a href="recordNewVaccineBatch.php" class="nav-link" role="button">
                Record New Vaccine Batch
                </a>
            </li>

            <!--log out-->
            <li class="nav-item">
                <a href="index.php" class="nav-link" role="button">
                Log Out
                </a>
            </li>
            </ul>
        </div>
        </div>
    </nav>


    <!--View vaccine batch information-->
    <form action="viewVaccination.php" method="GET">
        <!--list of available vaccines-->
        <div class="py-5 px-3 text-center">
            <!--shadow behind div with rounded corners-->
            <div class="container listvacBatchBg shadow-lg py-3 px-4 rounded-3">
            <h3>List of Available Vaccine Batches</h3>
                <div class="row horizontalOverflow">
                    <table>
                        <tr class="bg-white border-1">
                            <th class="p-3">BatchNo</th>
                            <th class="p-3">VaccineName</th>
                            <th class="p-3">Expiry Date</th>  
                            <th class="p-3">Quantity Available</th>   
                            <th class="p-3">Quantity Administered</th>
                        </tr>
                        <?php
                            $staffID = $_SESSION['staff_ID'];
                            $sql = "SELECT * FROM tb_batches WHERE staffID = '$staffID';";
                            $result = mysqli_query($conn, $sql);
                            
                            //if there are rows retrieved from database
                            if(mysqli_num_rows($result)>0){     
                                //while there is still have a row of batches retrieved from database
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <!--display list of batches which are retrieved from database-->
                        <tr class="bg-white border-1">
                            <!--display message stated that there are no vaccine batch in the list-->
                            <p id="message"></p>
                            <!--to store batchNo in value of input radio type-->
                            <td class="px-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="bNo" value="<?php echo $row["batchNo"];?>" required>
                                    <label class="form-check-label" for="bNo">
                                        <!--display batchNo-->
                                        <?php echo $row["batchNo"];?>
                                    </label>
                                </div>
                            </td>
                            
                            <td class="p-3"><?php echo $row["vaccine"];?></td>
                            <td class="p-3"><?php echo $row["expiryDate"];?></td>
                            <td class="p-3"><?php echo $row["quantityAvailable"];?></td>
                            <td class="p-3"><?php echo $row["quantityAdministered"];?></td>
                        </tr>
                        <?php
                                } //end of while loop
                            } 
                            //if there's no vaccine batches recorded by current admin
                            else{
                        ?>
                        
                        <th colspan="5" class="bg-white border-1 py-5">
                            There are no recorded vaccine batches, please record a new one
                        </th>

                        <?php
                            }
                        ?>
                    </table>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">View Vaccination</button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!--javascript-->
    <script src="assets/javascript/main.js"></script>
    
    

</body>

</html>