<?php
session_start();
include("../includes/header.php");
include("../includes/connect.php");

//Student Sign Up
if(isset($_POST['signup'])){
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $college=$_POST['college'];
	$password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  //Register Student
  if($password==$cpassword){
  	$query="insert into students(fname,lname,gender,email,contact,college,password,cpassword) values ('$fname','$lname','$gender','$email','$contact','$college','$password','$cpassword');";
    $result=mysqli_query($con,$query);
    if($result){
        $_SESSION['username'] = $_POST['fname']." ".$_POST['lname'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['contact'] = $_POST['contact'];
        $_SESSION['college'] = $_POST['college'];
        $_SESSION['email'] = $_POST['email'];
        header("Location:login.php");
    } 

    $query1 = "select * from students;";
    $result1 = mysqli_query($con,$query1);
    if($result1){
      $_SESSION['pid'] = $row['pid'];
    }

  }
  else{
    header("Location:error1.php");
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="style2.css">


    
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
    .card{
    background: #f8f9fa;
    border-top-left-radius: 5% 5%;
    border-bottom-left-radius: 5% 5%;
    border-top-right-radius: 5% 5%;
    border-bottom-right-radius: 5% 5%;
}

  </style>
  <body style="background: #F0F2F0;background: -webkit-linear-gradient(to bottom, #000C40, #F0F2F0);background: linear-gradient(to bottom, #000C40, #F0F2F0); background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="../index.php" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4> Teaching Practice Allocation System</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger" href="../index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>HOME</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="margin-bottom: 40px; color: black; margin-top: 100px; max-width: 650px;">
    <h2 class="tab-title text-center" style="margin-bottom: 40px; color: black; margin-top: 70px;">Student Sign</h2>
    <form method="post" action="">
        <div class="row">
            <div class="col-md-4"><label>First Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="fname" required></div><br><br>
            <div class="col-md-4"><label>Last Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="lname" required></div><br><br>
            <div class="col-md-4"><label>Gender:</label></div>
            <div class="col-md-8">
                  <label class="radio inline mr-4"> 
                      <input type="radio" name="gender" value="Male" checked>
                      <span> Male </span> 
                  </label>
                  <label class="radio inline ml-4"> 
                      <input type="radio" name="gender" value="Female">
                      <span>Female </span> 
                  </label>
              </div> <br><br>
            <div class="col-md-4"><label>Email ID:</label></div>
            <div class="col-md-8"><input type="email" class="form-control" name="email" required>
            </div><br><br>
            <div class="col-md-4"><label>Contact:</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="contact"  required>
            </div><br><br>
            <div class="col-md-4"><label>College/University:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="college"  required>
            </div><br><br>
            <div class="col-md-4"><label>password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="password" required>
            </div><br><br>
            <div class="col-md-4"><label>Comfirm Password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="cpassword"  required>
            </div><br><br>
            <div class="col-md-12">
                <input type="submit" name="signup" value="Sign Up" class="btn btn-block btn-primary">
                <p class="mt-2 text-center">Already have an Account? <a href="login.php">Sign In</a></p>
            </div>
        </div>
    </form>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>