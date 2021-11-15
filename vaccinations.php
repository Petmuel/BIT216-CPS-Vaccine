
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="cascade.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Manager</title>


    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet"

      href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <script type="text/javascript"

      src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"

      src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    </script>
    <style>
    body{background-color: #E8F3F9;}

    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>

  </head>

  <body class="container-fluid" >
    <header class="row">
      <a href="../home.html" title="Log Out!" class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-0 col-sm-6 offset-lg-0 col-lg-3"> <h2 >CPS-Vaccine</h2> </a>
      <h4 class="offset-md-2 col-md-6 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-5 col-lg-4">Username: &nbsp <strong>Kelvin</strong></h4>
    </header>

    <!-- START: left-Side Menu -->
    <div class="row">
      <div class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-2 col-sm-8 offset-lg-0 col-lg-3">
        <div class="btn-panel row ">
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["generateReport"] } }]' class=" offset-md-0 col-md-12">Generate Test Report</a> -->
          <a href="#" class="btn btn-info active offset-md-0 col-md-12">View Appointments</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["registerTestCenter"] } }]' class=" offset-md-0 col-md-12">Register Test Center</a> -->
          <a href="./register-center-view.html" class=" offset-md-0 col-md-12">View Vaccines</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["recordTester"] } }]' class=" offset-md-0 col-md-12">Record Tester</a> -->
          <a href="./ViewBatch.html" type="button" class="offset-md-0 col-md-12">View Vaccine Batch</a>

          <hr>
        </div>
      </div>

    <!-- Start: Main Content  -->
      <div style="margin-top:5vh;" class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-0 col-lg-9">

        <div class="row">

          <div class="col-12">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Patient</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Doston</td>
                <td>2020/10/20</td>
                <td>Pending</td>
                <td>
                  <!-- <button type="button" class="btn btn-primary" name="button">Administer</button> -->
                  <button type="button" class="btn btn-success" name="button">Confirm</button>
                  <button type="button" class="btn btn-danger" name="button">Reject</button>
                </td>
              </tr>
              <tr>i
                <td>Kenta</td>
                <td>2020/10/21</td>
                <td>Pending</td>
                <td>
                  <!-- <button type="button" class="btn btn-primary" name="button">Administer</button> -->
                  <button type="button" class="btn btn-success" name="button">Confirm</button>
                  <button type="button" class="btn btn-danger" name="button">Reject</button>
                </td>
              </tr>
              <tr>
                <td>Modu Xan</td>
                <td>2020/10/21</td>
                <td>Pending</td>
                <td>
                  <!-- <button type="button" class="btn btn-primary" name="button">Administer</button> -->
                  <button type="button" class="btn btn-success" name="button">Confirm</button>
                  <button type="button" class="btn btn-danger" name="button">Reject</button>
                </td>
              </tr>
              <tr>
                <td>Bilge Xan</td>
                <td>2020/10/21</td>
                <td>Pending</td>
                <td>
                  <!-- <button type="button" class="btn btn-primary" name="button">Administer</button> -->
                  <button type="button" class="btn btn-success" name="button">Confirm</button>
                  <button type="button" class="btn btn-danger" name="button">Reject</button>
                </td>
              </tr>
              <tr>
                <td>Attila Xan</td>
                <td>2020/10/21</td>
                <td>Confirmed</td>
                <td>
                  <button type="button" onclick="openUpdateKit()" class="btn btn-primary" id="myBtn" name="button">Administer</button>
                  <!-- <button type="button" class="btn btn-success" name="button">Confirm</button> -->
                </td>
              </tr>
            </tbody>
          </table>
        </div>


        </div>


<!-- Trigger/Open The Modal -->
<div class="row">
  <!-- The Modal -->
  <div id="myModal" class="modal row">

    <!-- Modal content -->
    <div class="modal-content col-6 offset-3" style="">
      <label for="">Patient: </label> <p>Kenta</p>
        <label for="">IC: </label> <p>AA1234567</p>
          <label for="">Batch No: </label> <p>B001</p>
            <label for="">Expiry date: </label> <p>12/12/2022</p>
              <label for="">Manufacturer: </label> <p>CoronaVac</p>
                <label for="">Vaccine: </label> <p>SINOVAC</p>
                <textarea name="name" rows="5" cols="80" placeholder="Remark here..."></textarea>
                <div class="row">
                <button type="button" class="btn btn-primary col-4 offset-1" onclick="document.getElementById('myModal').style.display = 'none';">Confirm</button>
                <button type="button" class="btn btn-danger col-4 offset-1" onclick="document.getElementById('myModal').style.display = 'none';">Reject</button>
                </div>

    </div>

  </div>
</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

    </div>

  </body>

</html>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
  // show Generate test form
  function showGTR(){
    // hide btn when move other page
    document.getElementById('btnNewKit').style.display = 'block';
    document.getElementById('updateKitForm').style.display = 'none';
    // For side menu
  document.getElementById('testCenterForm').style.display = 'none';
  document.getElementById('recordTesterForm').style.display = 'none';
  document.getElementById('manageKit').style.display = 'none';
  document.getElementById('showGTR').style.display = 'block';
  }
  // show Register test center form
  function showRTC(){
    document.getElementById('btnNewKit').style.display = 'block';
    document.getElementById('updateKitForm').style.display = 'none';
    // For side menu
    document.getElementById('showGTR').style.display = 'none';
    document.getElementById('recordTesterForm').style.display = 'none';
    document.getElementById('manageKit').style.display = 'none';
    document.getElementById('testCenterForm').style.display = 'block';
  }
  // show Record test form
  function showRT(){
    document.getElementById('btnNewKit').style.display = 'block';
    document.getElementById('updateKitForm').style.display = 'none';
    // For side menu
    document.getElementById('showGTR').style.display = 'none';
    document.getElementById('testCenterForm').style.display = 'none';
    document.getElementById('manageKit').style.display = 'none';
    document.getElementById('recordTesterForm').style.display = 'block';
  }
  // show Manage test kit stocks form
  function showMTKS(){
    document.getElementById('btnNewKit').style.display = 'block';
    document.getElementById('updateKitForm').style.display = 'none';
    // For side menu
    document.getElementById('showGTR').style.display = 'none';
    document.getElementById('testCenterForm').style.display = 'none';
    document.getElementById('recordTesterForm').style.display = 'none';
    document.getElementById('manageKit').style.display = 'block';
  }

  // when kit list selected then show form for update
  function openUpdateKit(){
    //document.getElementById('btnNewKit').style.display = 'none';
    document.getElementById('updateKitForm').style.display = 'block';
  }

  function hideUpdateKit(){
    document.getElementById('btnNewKit').style.display = 'block';
    document.getElementById('updateKitForm').style.display = 'none';
    alert('Test Kit number of stocks updated');
  }

  // for phone size side menu
  var menuBtn = document.querySelector('.menu-btn');
  var nav = document.querySelector('.side-nav');
  var lineOne = document.querySelector('nav .menu-btn .line--1');
  var lineTwo = document.querySelector('nav .menu-btn .line--2');
  var lineThree = document.querySelector('nav .menu-btn .line--3');
  var link = document.querySelector('nav .nav-links');
  menuBtn.addEventListener('click', () => {
      nav.classList.toggle('nav-open');
      lineOne.classList.toggle('line-cross');
      lineTwo.classList.toggle('line-fade-out');
      lineThree.classList.toggle('line-cross');
      link.classList.toggle('fade-in');
  })
</script>
