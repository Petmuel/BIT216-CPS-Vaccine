<?php
    include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/1ba7b41d28.js" crossorigin="anonymous"></script>

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

  <!-- style sheet -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Welcome to CPS-Vaccine</title>

</head>

<body class="crs">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top opacity-2">

      <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/vaccinationIcon.png" width="45" height="auto" alt="PCVSIcon">
            Cpsvaccine
          </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbar">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="signinPatient.php">Request Vaccine</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="signinAdmin.php">Sign Out</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>
  <br>

  <section>
    <div class="container margin-top">


      <form method="POST" class="form py-5"  action="signupcheck_admin.php">
        <h2>Request Vaccine</h2>
        <p>Select Vaccine:</p>
        <select name="vaccnine" required>
          <?php
            $sql = "Select * from tb_vaccines;";
            $result = mysqli_query($conn, $sql);

            //if there are rows retrieved from database
            if(mysqli_num_rows($result)>0){
              //while there is still have a row of healthcare centres retrieved from database
              while($row = mysqli_fetch_assoc($result)){
          ?>

          <!--display healthcare centres which are retrieved from database-->
          <option><?php echo $row["vaccineName"];?></option>
          <?php
                } //end of while loop
            }
          ?>

        <p>Select a Healthcare Centre:</p>
        <select name="centre" required>
          <?php
            $sql = "Select * from tb_healthcarecentres;";
            $result = mysqli_query($conn, $sql);

            //if there are rows retrieved from database
            if(mysqli_num_rows($result)>0){
              //while there is still have a row of healthcare centres retrieved from database
              while($row = mysqli_fetch_assoc($result)){
          ?>

          <!--display healthcare centres which are retrieved from database-->
          <option><?php echo $row["centreName"];?></option>
          <?php
                } //end of while loop
            }
          ?>


          <p>Batch No</p>
          <select name="Batch No" required>
            <?php
              $sql = "Select * from tb_batches;";
              $result = mysqli_query($conn, $sql);

              //if there are rows retrieved from database
              if(mysqli_num_rows($result)>0){
                //while there is still have a row of healthcare centres retrieved from database
                while($row = mysqli_fetch_assoc($result)){
            ?>

            <!--display healthcare centres which are retrieved from database-->
            <option><?php echo $row["batchNo"];?></option>
            <?php
                  } //end of while loop
              }
            ?>

            <div class="col-lg-6 py-3">
                <label for="exDate">Appointment Date</label>
                <input type="date" id="mDate" name="exDate" required>
            </div>



         <button type="submit" class="btn btn-danger mt-4" name="submit">Request</button>

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
