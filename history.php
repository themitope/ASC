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

    <body style="background-color: #E5E5E5">
      <div class="navbar">
        <a class="" href="#"><i class="fa fa-fw fa-search"></i></a> 
        <a href="#">History</a>
        <a href="#"><i class="fa fa-cog"></i></a>
      </div>

      <!-- The sidebar -->
      <div class="sidebar pt-5">
        <img src=".../.../.../.../Users\ITU\Downloads" class="rounded-circle" width="50px;"> <span style="color: white; font-size: 15px; padding-left: 5px">Welcome</span > 
        <span style="color: #FFFFFF; font-size: 11px; padding-left:60px">Adeyemi Deborah</span>
        <span style="color: #0EE17A; font-size: 11px; padding-left:60px">Admin</span><br><br>
        <a href="comparison.html" class="text-center">Comparison</a>
        <a href="history.html" class="active text-center">History</a>
        <a href="logout.html" class="text-center" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-sign-out"></i> Logout</a>
      </div>

      <div class="content">
        <div class="container"><br>
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
          <p style="font-weight: bold;">Comparison Sessions</p>
          <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>Edet Mary and Emmanuel Joel
                      <div class="collapse" id="collapseExample"><br>
                        <div class="">
                          <b>Similarities - 70%</b>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: #FF0000;"></div>
                            </div>
                          </div>
                      </div>
                    </td>
                    
                    <td>
                      <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-chevron-down" style="color: #000000"></i>
                      </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td>Edet Mary and Emmanuel Joel
                      <div class="collapse" id="collapse"><br>
                        <div class="">
                          <b>Similarities - 70%</b>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: #FF0000;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <a class="" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-chevron-down" style="color: #000000"></i>
                      </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td>Edet Mary and Emmanuel Joel
                      <div class="collapse" id="accordion"><br>
                        <div class="">
                          <b>Similarities - 70%</b>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: #FF0000;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <a class="" data-toggle="collapse" href="#accordion" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-chevron-down" style="color: #000000"></i>
                      </a>
                      
                    </td>
                  </tr>
                  <tr>
                    <td>Edet Mary and Emmanuel Joel
                      <div class="collapse" id="accordion2"><br>
                        <div class="">
                          <b>Similarities - 70%</b>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: #FF0000;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    
                    <td>
                      <a class="" data-toggle="collapse" href="#accordion2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-chevron-down" style="color: #000000"></i>
                      </a>
                      
                    </td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>