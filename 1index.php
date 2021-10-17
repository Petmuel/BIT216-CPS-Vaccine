<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="asset/style.css">

    <title>CPS-Vaccine</title>
  </head>
  <body id="loginPage">
    <!--
      Navigation bar
      navbar-expand-sm is to see all the nav-items before the nav bar collapses
      fixed-top: to make nav bar staying on top of the page when scrolling up or down
    -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
      <!--to contain contents in the container in the nav bar-->
      <div class="container">
        <!--Put title and image of the website-->
        <a href="#" class="navbar-brand mb-0 h1">
          <img src="img/vaccinationIcon.png" width="45" height="auto" alt="PCVSIcon">
          Cpsvaccine
        </a>

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
            <!--go to footer of the webpage (contact us)-->

            <!--Create dropdown toggle-->
            <li class="nav-item active dropdown">

              <!--To dropdown the items-->
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sign Up
              </a>

              <!--dropdown items-->
              <ul class="dropdown-menu"aria-labelledby="navbarDropdown">

                <li>
                  <a href="signupPatient.php" class="dropdown-item">
                    Patient

                  </a>
                </li>

                <li>
                  <a href="signupAdmin.php" class="dropdown-item">
                    Administratorr
                  </a>
                </li>

              </ul>


            </li>

            <li class="nav-item active dropdown">

              <!--To dropdown the items-->
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sign In
              </a>

              <!--dropdown items-->
              <ul class="dropdown-menu"aria-labelledby="navbarDropdown">

                <li>
                  <a href="signinPatient.php" class="dropdown-item">
                    PatientLogin
                  </a>
                </li>

                <li>
                  <a href="signinAdmin.php" class="dropdown-item">
                    AdminLogin
                  </a>
                </li>

              </ul>


            </li>
          </ul>
        </div>

        <!--Create search bar-->
        <!--
          form-control: create some of the stylings for the input

        <form action="#" class="d-flex">
          <input type="text" class="form-control me-2" name="search">
          <button type="submit" class="btn btn-outline-success">
            Search
          </button>
        </form>
      -->
      </div>
    </nav>

    <div class="container introBg mt-5">
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex justify-content-center align-items-center">
            <div class="introTitle justify-content-center align-items-center" >
              <h1 class="text-yellow">Private Covid Vaccination System</h1>
              <p class="fs-6 fw-light">PCVS is an application developed by
                Help University to assist in monitoring COVID-19 outbreak in Malaysia
                by empowering users to assess their health risk against COVID-19.
                This application also provides the Ministry of Health (MOH) with the
                necessary information to plan for early and effective countermeasures.</p>
            </div>
        </div>
        </div>

        <div class="col-md-6">
          <!--.img-fluid: make image responsive (max-width: 100%, height: auto)-->
          <img src="img/vaccination3.png" alt="vaccinationClipArt" class="img-fluid">
        </div>
      </div>
    </div>

  <div class="decorate">
    <div class="container pt-5">
      <div class="row p-2">
        <div class="col-md-6 text-center pb-4">
          <p class="fs-1 fst-italic">We care for your health!</p>
          <img src="img/doctors.png" alt="doctors" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

 <!-- ======= Footer ======= -->
 <footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-6">

          <div class="footer-info">
            <img src="img/vaccinationIcon.png" width="45" height="auto" alt="PCVSIcon">
            <h3>PCVS</h3>
            <p>There are many Covid-19 test centres that have been set up to manage Covid-19 testing. Private Covid
              Vaccination System will help allowing the health ministry to keep
              track of vaccinations that have been administered by healthcare administrators in different healthcare
              centres.ç
            </p>
          </div>


        </div>

        <div class="col-sm-6">


          <h4>Contact Us</h4>
          <p>
            <strong>Address : </strong>No. 15, Jalan Sri Semantan 1, Off, Jalan Semantan<br>
            Bukit Damansara, 50490<br>
            Kuala Lumpur<br>
            <strong>Phone : </strong>012-123-4567<br>
            <strong>Email : </strong>PCVS@gmail.com<br>
          </p>


        </div>

      </div>

    </div>

  </div>

  </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>CTIS</strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End  Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
