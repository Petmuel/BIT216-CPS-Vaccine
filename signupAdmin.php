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

  <title>Welcome to Govaccine</title>

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
              <a class="nav-link" href="signinPatient.php">PatientLogin</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="signinAdmin.php">AdminLogin</a>
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
        <h2>Admin Sign up</h2>
        <p>Select a Healthcare Centre</p>
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
        </select>
        <div class="form-group mt-3">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter username" required>
        </div>

        <div class="form-group mt-3">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>

        <div class="form-group mt-3">
          <label for="name">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
        </div>

        <div class="form-group mt-3">
          <label for="full name">Full Name</label>
          <input type="text" name="fullname" class="form-control" placeholder="Enter fullname" required>
        </div>

         <button type="submit" class="btn btn-danger mt-4" name="submit">Sign up</button>

      </form>
    </div>
  </section>

  <script>
  function signupcheck() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;

    if (username == null || username == '') {
      alert("userName can't be blank");
      return false;
    }
     if (password.length < 6) {
      alert('Password must be at least 6 characters long');
      return false;
    }
    if (email == null || email == '') {
      alert("email can't be blank");
      return false;
    }
    if (username!=null && password.length <6 && email!=null){
      return true;
    }
  }

  </script>


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
