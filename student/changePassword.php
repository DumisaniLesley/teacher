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
  //$college = $_SESSION['college'];

if(isset($_POST['app-submit']))
{
  $pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $gender = $_SESSION['gender'];
  $contact = $_SESSION['contact'];
  $doctor=$_POST['doctor'];
  $email=$_SESSION['email'];
  # $fees=$_POST['fees'];
  $docFees=$_POST['docFees'];

  $appdate=$_POST['appdate'];
  $apptime=$_POST['apptime'];
  $cur_date = date("Y-m-d");
  date_default_timezone_set('Asia/Kolkata');
  $cur_time = date("H:i:s");
  $apptime1 = strtotime($apptime);
  $appdate1 = strtotime($appdate);
	

  
}

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

<div class="container" style="margin-bottom: 40px; color: black; margin-top: 130px; max-width: 650px;">
    <h2 class="tab-title text-center" style="margin-bottom: 40px; color: black; margin-top: 70px;">Change Password</h2>
    <form class="form-group" method="post" action="../functions/func2.php">
        <div class="row">
            <div class="col-md-4"><label>Current Password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="school_number" required></div><br><br>
            <div class="col-md-4"><label>New Password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="school_number" required></div><br><br>
            <div class="col-md-4"><label>Confirm Password:</label></div>
            <div class="col-md-8"><input type="password" class="form-control" name="school_number" required></div><br><br>
            <div class="col-md-12">
                <input type="submit" name="changePassword" value="Change Password" class="btn btn-block btn-primary">
            </div>
        </div>
    </form>
</div>