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

?>
<?php include('../includes/home-head.php'); ?>

<body style="padding-top:50px;">
    <div class="container" style="margin-top:50px;">
        <h3
            style="margin-left: 40%; font-weight: bold; font-size: 34px; padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;">
            Welcome &nbsp<?php echo $username ?>
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
    

</body>

</html>