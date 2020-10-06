<!DOCTYPE html>
  <html>
    <head>
      <link type="text/css" rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
      <!-- Load an icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-color: #E5E5E5">
      <div class="navbar">
        <a class="" href="#"><i class="fa fa-fw fa-search"></i></a> 
        <a href="#">Result</a>
        <a href="#"><i class="fa fa-cog"></i></a>
      </div>
      <!-- The sidebar -->
      <div class="sidebar pt-5">
      <img src="img/girl.jpg" class="rounded-circle" width="50px;"> <span style="color: white; font-size: 15px; padding-left: 5px">Welcome</span > 
      <span style="color: #FFFFFF; font-size: 11px; padding-left:60px">Adeyemi Deborah</span>
      <span style="color: #0EE17A; font-size: 11px; padding-left:60px">Admin</span><br><br>
       <a href="comparison.html" class=" text-center">Comparison</a>
        <a href="history.html" class="text-center">History</a>
        <a href="logout.html" class="text-center" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-sign-out"></i> Logout</a>
      </div>

      <div class="content">
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
                      <a href="login.html"><button type="button" class="btn btn-primary">YES</button></a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    </div>
                </div>
              </div>
            </div>
          <p style="font-size: 16px; font-weight: bold">Edet Mary and Emmanuel Joel</p>
          <p style="font-size: 14px; font-weight: bold">Similarities: 70% 
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: #FF0000;"></div>
            </div>
          </p>

          <div class="dropdown show">
              <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: red">
                Details
              </a>
            <div class="collapse" id="collapseExample">
              <div class="">
                <p style="color: #000000; font-size: 14px">Full Result</p>
                <p style="color: red; font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--JavaScript at end of body for optimized loading-->
    
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
    </body>
  </html>
        