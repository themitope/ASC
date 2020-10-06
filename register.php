<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="./css/style.css"  media="screen,projection"/>
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style type="text/css">
        body{
          background-color: #dddddd;
        }
      </style>
    </head>
    <body>
      <div class="container">

        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <div class="mt-5">
                <?php
                        include("authentication.php");
                        if(isset($_SESSION['errors']['empty'])){
                            echo "<div class='alert alert-danger'>" .$_SESSION['errors']['empty']. "</div>";
                            unset($_SESSION['errors']['empty']);
                        }
                        if(isset($_SESSION['errors']['password'])){
                            echo "<div class='alert alert-danger'>" .$_SESSION['errors']['password']. "</div>";
                            unset($_SESSION['errors']['password']);
                        }
                        if(isset($_SESSION['errors']['matric_no'])){
                            echo "<div class='alert alert-danger'>" .$_SESSION['errors']['matric_no']. "</div>";
                            unset($_SESSION['errors']['matric_no']);
                        }
                        if(isset($_SESSION['errors']['pass_leng'])){
                            echo "<div class='alert alert-danger'>" .$_SESSION['errors']['pass_leng']. "</div>";
                            unset($_SESSION['errors']['pass_leng']);
                        }
                    ?>
                    </div>
            <div class="" style="background-color: #047940; width: auto; border-radius: 5px; margin-top: 120px;">
                <div class="head_text text-center">COMPARISON SYSTEM</div>
              </div><br><br>
          </div>  
       </div>

        <form method="POST" action="authentication.php">
          <div class="row justify-content-md-center">
            <div class="col-md-6">
              <label for="name" class="label">Full Name:</label>
              <input type="text" name="fname" class="form-control" required>
            </div>
          </div>
          <div class="row justify-content-md-center ">
            <div class="col-md-6">
               <label for="name" class="label">Username:</label>
              <input type="text" name="uname" class="form-control" required>
            </div>
          </div>
          <div class="row justify-content-md-center ">
            <div class="col-md-6">
               <label for="name" class="label">Matric no:</label>
              <input type="text" name="matric_no" class="form-control" required>
            </div>
          </div>
          <div class="row justify-content-md-center  ">
            <div class="col-md-6">
               <label for="name" class="label">Password:</label>
              <input type="password" name="pword" class="form-control" required>
            </div>
          </div>
          <div class="row justify-content-md-center ">
            <div class="col-md-6">
               <label for="name" class="label">Confirm Password:</label>
              <input type="password" name="cpword" class="form-control" required>
            </div>
          </div><br>
          <div class="row justify-content-md-center ">
            <div class="col-md-3">
               <input type="submit" name="register" value="Register" class="btn btn-primary btn-block" style="background-color: #047940; border-radius: 5px; border: none; ">
            </div>
          </div>
        </form>
        <div class="row justify-content-md-center mt-3">
          <div class="col-md-2.5">
            <p>Already a member? <a href="login.php" style="color: #047940">Sign in <span style="color:#047940;"><i class="fas fa-user"></i></span></a></p>
          </div>
        </div>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="bootstrap-4.0.0-dist/ js/bootstrap.min.js"></script>  
    </body>
    </html>
