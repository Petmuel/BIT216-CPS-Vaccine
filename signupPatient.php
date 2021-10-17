<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Welcome to CRS</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
    rel="stylesheet" type="text/css" />

  <!-- Third party plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />



  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/loginstyles.css" rel="stylesheet" />
</head>
<html>

<body class="volunteer">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">
        <i class="fas fa-hands-helping"></i> CPS-Vaccine
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="signinAdmin.php">AdminLogin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signinPatient.php">PatientLogin</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
            <form class="form-signin" method="post" action="signup_check.php">
              <div class="form-label-group">
                <input type="Username" id="inputUsername" class="form-control" placeholder="Username" name="username" required
                  autofocus>
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" pattern=".{8,}"   required title="8 chars minimum">
                <label for="inputPassword">Password</label>
              </div>

	      <div class="form-label-group">
                <input type="text" name="email" class="form-control" id="email" aria-describedby="email"
                  placeholder="Enter email" required>
                <label for="name">email</label>
              </div>


              <div class="form-label-group">
                <input type="text" name="fullName" class="form-control" id="fullName" aria-describedby="fullName"
                  placeholder="Enter fullName" required>
                <label for="name">Name</label>
              </div>


              <div class="form-label-group">
                <input type="text" name="ICPassport" class="form-control" id="ICPassport" aria-describedby="ICPassport"
                  placeholder="Enter ICPassport" required>
                <label for="country">ICPassport</label>
              </div>



              <button class="btn btn-lg btn-primary btn-block text-uppercase mb-3" type="submit">Sign Up</button>

              <h6 class="ml-3">If you already have an account, please click <a href="signinPatient.php">Login</a></h6>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>
