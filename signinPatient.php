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

<body class="cps-Vaccine">
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
      <h2>Patient Login</h2>

      <form method="post" class="form" name="patientLogin" action="patientLoginCheck.php">
        <div class="form-group mt-3">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" id="username" aria-describedby="username"
            placeholder="Enter username">
        </div>

        <div class="form-group mt-3">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
        </div>
        <button onclick="window.location.href='requestVaccine.php'">Sign In</button>
      </form>
      <p>If you don't sign up yet, please click <a href="signupPatient.php">here</a></p>
    </div>
  </section>
  <script>
  function loginCheck() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == null || username == '') {
      alert("userName can't be blank");
      return false;
    } if (password.length < 6) {
      alert('Password must be at least 6 characters long');
      return false;
    } if(username!=null && password.length <6 && email!=null)
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
