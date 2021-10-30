<!DOCTYPE html>
<?php 

// session_start();
include('../functions/func.php');  
include('../functions/newfunc.php');
include('../includes/connect.php');

  $pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $gender = $_SESSION['gender'];
  $lname = $_SESSION['lname'];
  $contact = $_SESSION['contact'];
  $college = $_SESSION['college'];


if(isset($_GET['cancel']))
  {
    $query=mysqli_query($con,"update appointmenttb set userStatus='0' where ID = '".$_GET['ID']."'");
    if($query)
    {
      echo "<script>alert('Your application has successfully been cancelled');</script>";
    }
  }

?>
<?php include('../includes/home-head.php'); ?>

<body style="padding-top:50px;">
    <div class="container" style="margin-top:50px;">
        <h3
            style="margin-left: 40%; font-weight: bold; font-size: 34px; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;">
            Welcome
            &nbsp<?php echo $username ?>
        </h3>
        <div class="row">
            <div class="container bg-white" style="margin-top:100px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-4x"> <i
                                        class="fa fa-square fa-stack-2x text-primary"></i> <i
                                        class="fa fa-bookmark fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle" style="margin-top: 5%;"> Teaching Practice </h2>
                                <p class="links cl-effect-1">
                                    <a href="apply.php" class="link">
                                        Apply
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-4x"> <i
                                        class="fa fa-square fa-stack-2x text-primary"></i> <i
                                        class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle" style="margin-top: 5%;">My Applications</h2>
                                    <p class="cl-effect-1">
                                        <a href="applicationHistory.php" class="link">
                                            Application History
                                        </a>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js">
    </script>

</body>

</html>