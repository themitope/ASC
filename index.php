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
      <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="OISACaNb"></script>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <div class="mt-5">
                <?php
                        include("authentication.php");
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
              </div><br><br>
          </div>  
       </div>
        <form method="POST" action="authentication.php">
          <div class="row justify-content-md-center ">
            <div class="col-md-4">
               <label for="name" class="label">Username</label>
              <input type="text" name="uname" class="form-control" required>
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
        <div class="row justify-content-md-center mt-3">
          <div class="col-md-2.5">
            <p>Not yet a member? <a href="register.php" style="color: #047940">SignUp <span style="color:#047940;"><i class="fas fa-user"></i></span></a></p>
          </div>
        </div>
        <div class="fb-login-button" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="bootstrap-4.0.0-dist/ js/bootstrap.min.js"></script>  
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
      <script>
    $(document).ready(function() {

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{app-id}',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : '{api-version}'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

  </script>
    </body>
    </html>
