<?php
    include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/1ba7b41d28.js" crossorigin="anonymous"></script>

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

  <!-- style sheet -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Welcome to Govaccine</title>

  <style>
        body{
            background-color: rgb(232, 252, 255);
        }

        .listBg{
            background-color: yellow;
        }

        .horizontalOverflow{
        overflow-x: auto;
        }
    </style>

</head>

<body class="crs">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top opacity-2">

      <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/vaccinationIcon.png" width="45" height="auto" alt="PCVSIcon">
            Govaccine
          </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="requestVaccine.php">Request Vaccine</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="index.php">Sign Out </a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>
  <br>

  <section>
    <div class="container margin-top">


      <!--Record new vaccine batch-->
    <form action="reqAppoint.php" method="GET">
        <div class="pt-5 text-center">
            <!--list of available vaccines-->
            <div class="container decorate border-1 py-3 px-5 shadow-lg listBg">
                <h3>List of Available Vaccines Batches</h3>
                <h5>Select a Vaccine Batch to Request An Appointment</h5>
                <div class="row horizontalOverflow">
                    <table class="bg-light">
                        <tr class="border-1">
                            <th class="p-3">BatchNo</th>
                            <th class="p-3">Vaccine</th>
                            <th class="p-3">Quantity Available</th>
                            <th class="p-3">Center</th>
                        </tr>
                        <?php
                            $sql = "Select * from tb_batches;";
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
                                        <input class="form-check-input" type="radio" name="batchNum" value="<?php echo $row["batchNo"];?>" required>
                                        <label class="form-check-label" for="batchNum">
                                            <!--display vaccineID-->
                                            <?php echo $row["batchNo"];?>
                                        </label>
                                    </div>
                                </td>
                                <td class="p-3"><?php echo $row["vaccine"];?></td>
                                <td class="p-3"><?php echo $row["quantityAvailable"];?></td>
                                <td class="p-3">
                                  <?php
                                    $sql2 = "Select * from tb_admins;";
                                    $result2 = mysqli_query($conn, $sql2);

                                    //if there are rows retrieved from database
                                    if(mysqli_num_rows($result2)>0){
                                      while($row2 = mysqli_fetch_assoc($result2)){
                                        if($row2["staffID"] == $row["staffID"]){
                                          echo $row2["centre"];
                                        }
                                      }
                                    }
                                  ?>
                                </td>
                            </tr>
                        <?php
                                } //end of while loop
                            }
                        ?>

                    </table>
                </div>


                <div class="text-center py-3">
                    <h4>Enter your appointment date</h3>

                    <div class="py-2">
                        <label for="appointmentDate">Appointment Date</label>
                        <input type="date" id="aDate" name="appointmentDate" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Request</button>
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
                    document.getElementById('aDate').setAttribute("value", minDate);
                    document.getElementById('aDate').setAttribute("min", minDate);

                </script>
            </div>
        </div>
    </form>
    </div>
  </section>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
