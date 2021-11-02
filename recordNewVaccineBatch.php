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
    
    <title>Record New Vaccine Batch</title>

    <style>
        body{
            background-color: rgb(232, 252, 255);
        }
        
        .listBg{
            background-color:rgb(154, 195, 255);
        }

        .horizontalOverflow{
        overflow-x: auto;
        }
    </style>
</head>

<body>
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
                    <a href="viewVaccineBatchInfo.php" class="nav-link" role="button">
                    View Vaccine Batch Information
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


    <!--Record new vaccine batch-->
    <form action="recordVc.php" method="GET">
        <div class="pt-5 text-center">
            <!--list of available vaccines-->
            <div class="container decorate border-1 py-3 px-5 shadow-lg listBg">  
                <h3>List of Available Vaccines</h3>
                <h5>Select a Vaccine to Record New Batch</h5>
                <div class="row horizontalOverflow">
                    <table class="bg-light">
                        <tr class="border-1">
                            <th class="p-3">VaccineID</th>
                            <th class="p-3">VaccineName</th>
                            <th class="p-3">Manufacturer</th>   
                        </tr>
                        <?php
                            $sql = "Select * from tb_vaccines;";
                            $result = mysqli_query($conn, $sql);
                            
                            //if there are rows retrieved from database
                            if(mysqli_num_rows($result)>0){     
                                //while there is still have a row of vaccines retrieved from database
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <!--display list of vaccines which are retrieved from database-->
                            <tr class="border-1">
                                <td class="px-3">
                                    <div class="form-check">  
                                        <!--to store vaccineID in value of input radio type-->
                                        <input class="form-check-input" type="radio" name="vac" value="<?php echo $row["vaccineID"];?>" required>
                                        <label class="form-check-label" for="vac">
                                            <!--display vaccineID-->
                                            <?php echo $row["vaccineID"];?>
                                        </label>
                                    </div>
                                </td>
                                <td class="p-3"><?php echo $row["vaccineName"];?></td>
                                <td class="p-3"><?php echo $row["manufacturer"];?></td>
                            </tr>
                        <?php
                                } //end of while loop
                            }  
                        ?>
                        
                    </table>
                </div>
            
                    
                <div class="row py-5">
                    <h4>Record new vaccine batch</h3>

                    <div class="col-lg-6 py-3">
                        <label for="exDate">Expiry Date</label>
                        <input type="date" id="mDate" name="exDate" required>
                    </div> 

                    <div class="col-lg-6 py-3">
                        <label for="quantityAv">Quantity of dose available</label>
                        <input type="number" id="quantityAv" name="quantityAv" min="1" max="10000" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Record</button>
                <!--display message which stated that admin has successfully recorded new vaccine batch
                    declared in recordVc.php-->
                
                <?php
                    if(isset($_GET['message'])){ 
                        $message = $_GET['message'];
                ?>
                <p class="alert alert-success" id="msg">
                    <?php echo $message; ?>
                </P>
                <?php
                    }
                ?>
                
                <!--display the message for short period of time by using javascript-->
                <script>
                    setTimeout(function(){
                        document.getElementById('msg').style.display = 'none';
                    }, 2500);

                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth() +1;
                    var year = date.getUTCFullYear();
                    //if day, month or year is less than 10, add 0 to its left side to make it 2 digits
                    if (day<10){
                        day = '0' + day;
                    }
                    if (month<10){
                        month = '0' + month;
                    }
                    if (year<10){
                        year = '0' + year;
                    }
                    var minDate = year + "-" + month + "-" + day;
                    document.getElementById('mDate').setAttribute("value", minDate);
                    document.getElementById('mDate').setAttribute("min", minDate);
                    console.log(minDate);
                </script>
            </div>
        </div>
    </form>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>
</html> 