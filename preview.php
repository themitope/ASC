<?php
session_start();
include("./config/connect.php");
if(isset($_POST['save'])){
  $error = "";
  $fname = $_SESSION['user'];
  $matric_no = $_SESSION['matric_no'];
  $assignment = $_SESSION['assignment'];
  $query = "INSERT INTO assignment (fname, matric_no, assignment) VALUES ('$fname','$matric_no','$assignment')" ;
  $result = mysqli_query($con, $query) or die(mysqli_error($result));
  if($result){
    $error = "You have successfully submitted your assignment";
  }
}
?>
 <!DOCTYPE html>
  <html>
    <head>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">


      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-color: #E5E5E5">
      <div class="navbar fixed-top">
        <a class="" href="#"><i class="fa fa-fw fa-search"></i></a> 
        <a href="#">Preview Assignment</a>
        <a href="logout.php" class="" data-toggle="modal" data-target="#exampleModalCenter"> Logout <i class="fas fa-sign-out-alt"></i> </a>
      </div>

      <div class="content mt-5">
        <div class="container">
          <!-- Modal body -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <div class="modal-body">
                      Are you sure you want to logout?
                    </div>
                    <div class="modal-footer">
                      <a href="logout.php"><button type="button" class="btn btn-primary">YES</button></a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    </div>
                </div>
              </div>
            </div>
              </div>
            </div><br>
              <center>
                <p style="font-weight: 600; font-size: 30px; color: #047940">Preview Assignment</p>
              </center><br>
              <div class="row justify-content-md-center text-center">
              <div class="col-md-8 mb-2">
              <?php
              if(isset($error)){
                echo "<div class = 'alert alert-success'>".$error. "</div>";
              }
              ?>
            </div>
            </div>
              <div class="row justify-content-md-center">
                <div class="card col-md-8 mb-2"><br><br>
                  <p>
                  <label for="name"><strong>FullName:</strong></label>
                    <?php
                      echo $_SESSION['user'];
                    ?>
                  </p>
                  <p>
                     <label for="name"><strong>Matric no:</strong></label>
                    <?php
                      echo $_SESSION['matric_no'];
                    ?>
                  </p>
                  <p>
                  <?php
                    echo $_SESSION['assignment'];
                  ?>
                  </p>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <a href = "javascript:history.back()"  class="btn btn-primary" style="border-radius: 10px; border: none; width: 100px">Edit</a>
                    </div>
                    <form method="post" action="">
                    <div class="col-md-6">
                      <input type="submit" name="save" class="btn btn-primary" value="Save"
                      style="background-color: #047940; border-radius: 10px; border: none; width: 100px">
                    </div>
                  </form>
                  </div>
                </div>
              </div>
      <!--JavaScript at end of body for optimized loading-->
      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
      
    </body>
  </html>


