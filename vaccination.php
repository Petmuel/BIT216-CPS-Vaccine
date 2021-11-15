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
            background-color: rgb(240, 177, 187);
        }

        .listBg{
            background-color:rgb(177, 179, 240);
        }

        .horizontalOverflow{
             overflow-x: auto;
        }
    </style>

    <title>View Vaccinations</title>
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

            <li class="nav-item">
                <a href="recordNewVaccineBatch.php" class="nav-link" role="button">
                Record New Vaccine Batch
                </a>
            </li>

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


    <!--View vaccine batch information-->
    <form action="confirm_recordVaccinations.php" method="GET">
        <!--list of available vaccines-->
        <div class="py-5 px-3 text-center">
            <!--shadow behind div with rounded corners-->
            <div class="container listBg shadow-lg py-3 px-4 rounded-3">
            <h3>List of Vaccinations</h3>
            <h5>Select a Vaccination To Confirm Its Appointment/Record That It Has Been Administered</h5>
                <div class="row horizontalOverflow">
                    <table>
                        <tr class="bg-white border-1">
                            <th class="p-3">VaccinationID</th>
                            <th class="p-3">Appointment Date</th>
                            <th class="p-3">Status</th>
                        </tr>
                        <?php
                            $batchNo= $_SESSION['batchNo'];
                            $sql = "SELECT * FROM tb_vaccinations WHERE batchNo = '$batchNo';";
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
                                    <input class="form-check-input" type="radio" name="vID" value="<?php echo $row["vaccinationID"];?>" required>
                                    <label class="form-check-label" for="bNo">
                                        <!--display batchNo-->
                                        <?php echo $row["vaccinationID"];?>
                                    </label>
                                </div>
                            </td>

                            <td class="p-3"><?php echo $row["appointmentDate"];?></td>
                            <td class="p-3"><?php echo $row["status"];?></td>
                        </tr>
                        <?php
                                } //end of while loop
                            }
                            //if there's no vaccinations
                            else{
                        ?>

                        <th colspan="5" class="bg-white border-1 py-5">
                            There are no vaccinations
                        </th>

                        <?php
                            }
                        ?>
                    </table>
                </div>
                <br>
                <button type="submit" name="confirm" class="btn btn-primary">Confirm Vaccination Appointment</button>
                <button type="submit" name="record" class="btn btn-primary">Record Vaccination Administered</button>

              <form method="POST" action="vaccinations_check.php" class="m-3">
              <h3 class="mt-4 mb-4"> Update Status & remark</h3>
              <div class="form-group row">
                <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select id="inputStatus" class="form-control" name="status">
                    <option selected>Choose</option>
                    <option>Accepted</option>
                    <option>Pending</option>
                  </select>
                 </div>
              </div>
              <div class="form-group row">
                <label for="inputRemark" class="col-sm-2 col-form-label">Remarks</label>
                <div class="col-sm-10">
                  <input type="text" name="remark" class="form-control" id="inputRemark" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <button class="btn btn-success mt-3" type="submit">Update</button>

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
