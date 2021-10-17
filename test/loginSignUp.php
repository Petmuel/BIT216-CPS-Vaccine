<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/BIT301_Aug2021/src/style/base.css">
    <link rel="stylesheet" href="/BIT301_Aug2021/src/pages/forms/form.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <title>Login</title>
  </head>
  <body class="" style="background-color: #c2e3ff;">
    <div class="wrapper">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bgcolor px-5">
            <a class="logosize nav-link mx-auto" href="/BIT301_Aug2021/src/pages/home.html" style="color:white;">Covax</a>
            <a class="nav-link fs-5" href="#" style="color:white;">Login</a>
        </nav>
      </header>

      <!-- content -->
      <div class="wrapper-form">
        <div id="logWrap" class="login-wrap" style="min-height:700px">
            <div class="login-html">
              <input id="tab-1" type="radio" name="tab" class="sign-in" onchange="changeWrapperSize()" checked><label for="tab-1" class="tab">Login</label>
              <input id="tab-2" type="radio" name="tab" class="sign-up" onchange="changeWrapperSize()" ><label for="tab-2" class="tab" >Sign Up</label>
              <div class="login-form">
                <!-- Login Form -->
                <form method="post" action="./loginAction.php">
                  <div class="sign-in-htm">
                    <?php
                      session_start();
                      if (isset($_GET['valid'])){
                        echo "<p class='alert alert-warning'>Invalid username or password</p>";
                      }
                    ?>
                    <div class="group">
                      <label for="username" class="label">Username</label>
                      <input id="username" name="username" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="password" class="label">Password</label>
                      <input id="password" name="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                      <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                      <a href="#forgot" class="text-white">Forgot Password?</a>
                    </div>
                  </div>
                </form>

                <!-- Sign Up form -->
                <form action="signUpAction.php" method="post">
                  <div class="sign-up-htm">
                    <div class="group">
                      <label for="fullName" class="label">Full Name</label>
                      <input id="fullName" name="fullName" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="userID" class="label">IC/Passport</label>
                      <input id="userID" name="userID" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="username" class="label">Username</label>
                      <input id="username" name="username" type="text" class="input">
                    </div>
                    <div class="group">
                      <label for="password" class="label">Password</label>
                      <input id="password" name="password" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                      <label for="passRep" class="label">Repeat Password</label>
                      <input id="passRep" name="passRep" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                      <label for="email" class="label">Email Address</label>
                      <input id="email" name="email" type="text" class="input">
                    </div>
                    <div class="group">
                      <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                      <label for="tab-1" class="text-white">Already Member? Login from here</label>
                      <br>
                      <br>
                      <a href="../Staff/staffSignUp.php" class="text-white">If you are stuff, click here to sign up</a>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of content -->

        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4 " style=" background-color: #1C2331;">

            <!-- Footer Elements -->
            <div class="container linkCenter">
                <ul class="follow-me list-unstyled ">
                    <li style=" padding-top:5px;"><a href="https://www.facebook.com"></a></li>
                    <li style=" padding-top:5px;"><a href="https://twitter.com"></a></li>
                    <li style=" padding-top:5px;"><a href="https://www.instagram.com"></a></li>
                    <li style=" padding-top:5px;"><a href="https://www.youtube.com"></a></li>
                    <li style=" padding-top:5px;"><a href="https://www.plus.google.com"></a></li>
                </ul>       
            </div>
            <!-- Footer Elements -->
            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: #1C2331; color:aliceblue;">© 2021 Copyright:
                <a href="" style="color: aliceblue;"> Covax.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script>
    function changeWrapperSize(){
      var check1 = document.getElementById("tab-1").checked;
      var check2 = document.getElementById("tab-2").checked;

      if(check1 == true){
        document.getElementById("logWrap").style.minHeight = "700px"
      }
      if(check2 == true){
        document.getElementById("logWrap").style.minHeight = "950px"
      }
      else{
        document.getElementById("logWrap").style.minHeight = "700px"
      }
    }

  </script>

  </body>

  </html>
