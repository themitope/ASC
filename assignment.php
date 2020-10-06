<?php
session_start();
if(!(isset($_SESSION['admin']))){
header("Location: admin_login.php");
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
        <a href="#">Comparison</a>
        <a href="#"><i class="fa fa-cog"></i></a>
      </div>

      <!-- The sidebar -->
      <div class="sidebar pt-5">
      <img src="img/girl.jpg" class="rounded-circle" width="50px;"> <span style="color: white; font-size: 15px; padding-left: 5px">Welcome</span > 
      <span style="color: #FFFFFF; font-size: 11px; padding-left:60px"><?php echo $_SESSION['admin']?></span>
      <span style="color: #0EE17A; font-size: 11px; padding-left:60px">Admin</span><br><br>
        <a href="comparison.html" class="active text-center">Comparison</a>
        <a href="history.html" class="text-center">History</a>
        <a href="logout.html" class="text-center" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-sign-out"></i> Logout</a>
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
                      <a href="admin_logout.php"><button type="button" class="btn btn-primary">YES</button></a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    </div>
                </div>
              </div>
            </div>
            <?php
            include './config/connect.php';

            if(isset($_POST['compare'])){
            		$sid = $_POST['id'];
            		

            		$sqll1 = mysqli_query($con, "SELECT * FROM assignment WHERE id = '$sid'") or die(mysqli_error());
            		$rowxx = mysqli_fetch_array($sqll1);
            		$assignment2 = $rowxx['assignment'];
            		$id = $sid-=1;


            		$sqll = mysqli_query($con, "SELECT * FROM assignment WHERE id = '$id'");
            		$rowx = mysqli_fetch_array($sqll);
            		$assignment1 = $rowx['assignment'];
            similar_text($assignment1,$assignment2,$percent);
            ?>
            <p style="font-size: 14px; font-weight: bold">Similarities: <?php echo $percent;?>% 
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php echo $percent;?>%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="background-color: #FF0000;"></div>
            </div>
          <?php } ?>
          </p>
            <?php
             if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 2;
        $offset = ($pageno-1) * $no_of_records_per_page;

       include './config/connect.php';

        $total_pages_sql = "SELECT COUNT(*) FROM assignment";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM assignment LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql) or die(mysqli_error($con));
        while($row = mysqli_fetch_array($res_data)){
          ?>
            <p style="font-weight: 600; font-size: 20px;">Student's Details</p>
          <form method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <label for="name">Name:</label>
              <div class="col-md-4 ml-5">
                <?php
                echo $row['fname'];
                ?>
              </div>
            </div><br><br>
            <div class="row">
              <label for="name">Matric no:</label>
              <div class="col-md-4 ml-3">
                <?php
                echo $row['matric_no'];
                ?>
              </div>
            </div><br><br>
            <div class="row">
              <label for="file">Assignment:</label>
              <div class="col-md-6">
                  <?php
                    echo $row['assignment'];
                  ?>
              </div>
            </div>
            <br>
            <form method="POST" action="assignment.php">
              <textarea class="form-control z-depth-1" rows="10" id="assignment" name="id" value="">
                <?php echo $row['id']?>
              </textarea>
        <?php
             
                }
            ?>
             
          <div class="row">
            <div class="col-md-4"></div>
          <div class="col-md-4"><br><br>
            <input type="submit" class="btn btn-primary mb-2 block" style="background-color: #047940; border-radius: 10px; border: none; width: 130px" name="compare" value="Compare">
        </div>
      </div>
      </form>
      <ul class="pagination pg-blue">
          <li class="page-item"><a href="?pageno=1" class="page-link">First</a></li>
          <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
              <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
          </li>
          <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
              <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="page-link">Next</a>
          </li>
          <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
        </ul>
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="bootstrap-4.0.0-dist/ js/bootstrap.min.js"></script>
      
    </body>
  </html>
        