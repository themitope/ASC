<?php
session_start();
include("./config/connect.php");
if(isset($_POST['login'])){
  $errors = array();
  $name = $_POST['name'];
  $pword = md5($_POST['pword']);
  if(!empty($name) && !empty($pword)){
    $query = "SELECT * FROM admin WHERE name = '$name'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if(mysqli_num_rows($result) < 1){
      $errors['no_user'] = '**Admin does not exist';
      header("Location: admin_login.php");
    }
    else{
      $row = mysqli_fetch_assoc($result);
      if(!($row['pword'] === $pword)){
        $errors['password'] = '**Password is incorrect';
        header("Location: admin_login.php");
      }
      else{
        $_SESSION['admin'] = $row['name'];
        header("Location: comparison.php");
      }
    }
    
  }
   if(count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    exit;
  } else {
    // clean up previous validation errors, everything's fine
    unset($_SESSION['errors']);
  }
}

?>


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
                        if(isset($_SESSION['errors']['no_user'])){
                            echo "<div class='alert alert-danger'>" .$_SESSION['errors']['no_user']. "</div>";
                            unset($_SESSION['errors']['no_user']);
                        }
                        if(isset($_SESSION['errors']['password'])){
                            echo "<div class='alert alert-danger'>" .$_SESSION['errors']['password']. "</div>";
                            unset($_SESSION['errors']['password']);
                        }
                        
                    ?>
                    </div>
            <div class="" style="background-color: #047940; width: auto; border-radius: 5px; margin-top: 120px;">
                <div class="head_text text-center">COMPARISON SYSTEM</div>
              </div>
          </div>  
       </div><br><br>
        <form method="POST" action="admin_login.php">
          <div class="row justify-content-md-center ">
            <div class="col-md-4">
               <label for="name" class="label">Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
          </div>
          <div class="row justify-content-md-center  ">
            <div class="col-md-4">
               <label for="name" class="label">Password</label>
              <input type="password" name="pword" class="form-control" required>
            </div>
          </div>
          <br>
          <div class="row justify-content-md-center ">
            <div class="col-md-3">
               <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" style="background-color: #047940; border-radius: 5px; border: none; ">
            </div>
          </div>
        </form>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="bootstrap-4.0.0-dist/ js/bootstrap.min.js"></script>  
    </body>
    </html>
