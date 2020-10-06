<?php
session_start();
if(!(isset($_SESSION['user']))){
header("Location: login.php");
}

if(isset($_POST['submit'])){
 $assignment = $_POST['assignment'];
 if(!empty($assignment)){
  $_SESSION['assignment'] = $assignment;
  header("Location: preview.php");
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
        <a href="#">Submit Assignment</a>
        <a href="logout.php" class="" data-toggle="modal" data-target="#exampleModalCenter"> Logout <i class="fas fa-sign-out-alt"></i> </a>
      </div>

      <div class="content mt-5"><br>
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
              <center><p style="font-weight: 600; font-size: 30px; color: #047940">Student's Details</p></center>
          <form method="POST" action="">
            <div class="row">
              <label for="name">FullName:</label>
              <div class="col-md-4 ml-5">
                <?php
                  echo $_SESSION['user'];
                ?>
              </div>
            </div><br>
            <div class="row">
              <label for="name">Matric no:</label>
              <div class="col-md-4 ml-5">
                <?php
                  echo $_SESSION['matric_no'];
                ?>
              </div>
            </div><br>
            <div class="row">
              <label for="file">Assignment:</label>
              <div class="col-md-6">
                  <textarea class="form-control z-depth-1" rows="10" name="assignment" required></textarea>
              </div>
            </div>
            <div class="row">
            <div class="col-md-4"></div>
          <div class="col-md-4"><br><br>
            <input type="submit" class="btn btn-primary mb-2" style="background-color: #047940; border-radius: 10px; border: none; width: 130px" name="submit" value="Preview"></button></a>
        </div>
      </div>
          </form><br><br>


          

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="bootstrap-4.0.0-dist/ js/bootstrap.min.js"></script>
      <script type="text/javascript">

        // Initialize CKEditor

        CKEDITOR.replace('assignment',{

          width: "700px",
          height: "200px"

        }); 
      </script>
    </body>
  </html>
        