<body class="" style="background-color: #c2e3ff;">
    <div class="wrapper">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bgcolor px-5">
            <a class="logosize nav-link mx-auto" href="/BIT301_Aug2021/src/pages/home.html" style="color:white;">CPS-Vaccine</a>
            <a class="nav-link fs-5" href="../Login/loginSignUp.php" style="color:white;">Logout</a>
        </nav>
      </header>

      <!-- content -->
        <main>
            <div id="overlay">
              <div class="cv-spinner">
                <span class="spinner"></span>
              </div>
            </div>
            <section class="container my-lg-5 my-2 row mx-auto" id="appointmentForm" >
              <form action="" class="card py-lg-5 py-2 offset-lg-2 col-lg-8 col-12" >
                <div class="card-body ">
                  <h1 class="card-title text-center pb-2" style="font-family: 'Vollkorn', serif;" >Create Vaccination Appointment</h1>
                  <hr>
                  <div class="row">
                    <!-- select vaccine -->
                      <div class="ap-group form-group pt-2">
                            <label for="vacineType" class="label row pb-3">Vaccine Type</label>
                            <select id="vacineType" name ="vacineType" type="text" class="input col-lg-8 col-12" required>
                              <option selected hidden>Choose...</option>
                              <?php
                                $con = mysqli_connect("localhost", "root", "", "cpsvaccine");
                                $script = "select * from vaccine";
                                $result = mysqli_query($con, $script);
                                while ($row = $result -> fetch_assoc()) {
                              ?>
                                <option class="text-dark" value="<?php echo $row['vaccineID']; ?>"><?php echo $row['vaccineName'], " from ", $row['manufacturer']; ?></option>
                              <?php } ?>
                            </select>
                      </div>

                      <!-- select Healthcare center -->
                      <div class="mt-4 ap-group form-group" style="min-height: 150px;">
                      <hr>
                        <label for="vacineType" class="label pb-2">Healthcare Center</label>
                        <div id="hcList" class="row"></div>
                        <h4 class="text-center pt-5" id="msgChoseVaccine">Choose vaccine type</h4>
                      </div>

                      <!-- select Batch  -->
                      <div class="mt-4 ap-group form-group" style="min-height: 150px;">
                      <hr>
                        <label for="vacineType" class="label pb-2">Batch No</label>
                        <div id="batchList" class="row"></div>
                        <h4 class="text-center pt-5" id="msgChoseBatch">Choose Healthcare Center</h4>
                      </div>

                      <!-- select Apointment Date  -->
                      <div class="mt-4 ap-group form-group" style="min-height: 100px;" id="apDateForm">
                      <hr>
                        <label for="selectAPDate" class="label pb-2">Apointment Date</label>
                        <input class="pl-5 py-2 col-lg-8 col-12" type="date" name="selectAPDate" id="selectAPDate">
                      </div>
                      <!-- Submit button -->
                      <div class="mt-4 ap-group form-group"  id="submitForm">
                      <hr>
                        <div class="d-flex align-items-center">
                          <button type="button" class="btn btn-primary mx-auto" id="submitBtn">Submit Appointment</button>
                        </div>
                      </div>
                  </div>
                </div>
              </form>
            </section>
        </main>
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
                <a href="" style="color: aliceblue;"> CPS-Vaccine</a>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
// Ajax call
// Display Health center after select Vaccine type
      $("#apDateForm").hide();
      $("#submitForm").hide();
      $(document).ready(function(){
      $('#vacineType').on('change', function() {
      $("#hcList").show();
      $("#batchList").hide();
      $("#msgChoseBatch").show();
      $("#apDateForm").hide();
      $("#submitForm").hide();
        var select_val = $(this).val();
        $.ajax({
          type: "post",
          url: "callFunction.php",
          dataType: 'html',
          data: {"vc": select_val},
          async : false,
          timeout: 50000
        }).done(function(response) {
            console.log("Successfully fetch HC list");
            document.getElementById("hcList").innerHTML=response;
            $("#msgChoseVaccine").hide();
            getBatchs();
        }).fail(function(error) {
          $("#msgChoseVaccine").show();
        });
      })
    })
// Display batch after select center
    function getBatchs(){
      $('input[name="selectedHC"]:radio').on('change', function() {
        $("#batchList").show();
        $("#apDateForm").hide();
        $("#submitForm").hide();
        var vcID = $('#vacineType').val();
        var select_val = $(this).val();
        $.ajax({
          type: "post",
          url: "callFunction.php",
          data: {"hc": select_val, "vcID": vcID},
          timeout: 50000
        }).done(function(response) {
            console.log("Successfully fetch Batch list");
            $("#msgChoseBatch").hide();
            document.getElementById("batchList").innerHTML=response;
            getDateForAp();
        }).fail(function(error) {
            console.log("Error");
        });
    })
    }

// Display select for appointment date
    function getDateForAp(){
      $('input[name="selectedBatch"]:radio').on('change', function() {
      $("#apDateForm").show();
      var select_val = $(this).val();
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      if (dd < 10) {
        dd = '0' + dd;
      }
      if (mm < 10) {
        mm = '0' + mm;
      }
      today = yyyy + '-' + mm + '-' + dd;
      $.ajax({
          type: "post",
          url: "callFunction.php",
          data: {"bt": select_val},
          timeout: 50000
        }).done(function(response) {
            console.log("Successfully Get date");
            const result = $('#selectAPDate').attr({min: today,max: response,});
            $('#selectAPDate').on('change', function() {
              $("#submitForm").show();

              // Submittion here
              $('#submitBtn').click(function(){
                var selectedApdate = $("#selectAPDate").val();
                $.ajax({
                  type: "post",
                  url: "callFunction.php",
                  data: {"selBatch": select_val, "selAPdate":selectedApdate},
                  timeout: 50000
                }).done(function(response) {
                    if(response=="success"){
                      // alert("Your appointment made successfully!");
                      thankYoupage();
                      window.setTimeout(function(){
                        window.location.href = "appointment.php";
                      }, 3000);
                    }else{
                      if(confirm("Failed, you have other pending appointment. \nGo back Home?")){
                        window.location = '/BIT301_Aug2021/src/pages/home.html';
                      }else{
                        window.location = 'appointment.php';
                      }
                    }
                }).fail(function(error) {
                    console.log("Error");
                });
              })
            });
        }).fail(function(error) {
            console.log("Error");
        });
    })};

    function thankYoupage(){
      $(document).ajaxSend(function() {
        $("#overlay").fadeIn(500);　
      });

        $.ajax({
          type: "post",
          url: "/BIT301_Aug2021/src/pages/thankYou.html",
          datatype: 'html',
          timeout: 50000
        }).done(function(response) {
          window.scroll({top: 0, behavior: 'smooth'});
          window.setTimeout(function(){
            $("#overlay").fadeOut(500);

            document.getElementById("appointmentForm").innerHTML=response;
          },500);
        }).fail(function(error) {
            console.log("Error");
        });
    }
  // After Select appointment date

    function resetForm(){
      $("#batchList").hide();
      $("#hcList").hide();
      $("#msgChoseBatch").show();
      $("#msgChoseVaccine").show();
      $("#apDateForm").hide();
      $("#submitForm").hide();
    }


  </script>
  </body>
