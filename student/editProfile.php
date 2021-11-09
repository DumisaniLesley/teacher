<!DOCTYPE html>
<?php 
//session_start();

include('../includes/connect.php');
include('../functions/func.php');  


    $pid = $_SESSION['pid'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $fname = $_SESSION['fname'];
    $gender = $_SESSION['gender'];
    $lname = $_SESSION['lname'];
    $contact = $_SESSION['contact'];
    $college = $_SESSION['college'];

  if(isset($_POST['update']))
{
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $college=$_POST['college'];

	$query="UPDATE students SET fname='$fname',lname='$lname',gender='$gender',email='$email',contact='$contact',college='$college' WHERE pid='$pid';";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:dashboard.php");
    } else {
        echo "something went wrong!!!";
    }
}

?>

<?php include('../includes/home-head.php'); ?>

<div class="container" style="margin-bottom: 40px; color: black; margin-top: 130px; max-width: 650px;">
    <h2 class="tab-title text-center" style="margin-bottom: 40px; color: black; margin-top: 70px;">Edit Profile</h2>
    <form class="form-group" method="post" action="">
        <div class="row">
            <div class="col-md-4"><label>First Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="school_number" value="<?php echo $fname;?>" required></div><br><br>
            <div class="col-md-4"><label>Last Name:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="school_number" value="<?php echo $lname;?>" required></div><br><br>
            <div class="col-md-4"><label>Gender:</label></div>
            <div class="col-md-8">
                <select name="status" class="form-control" id="status" required="required">
                    <option value="<?php echo $gender;?>" name="state" disabled selected><?php echo $gender;?></option>
                    <option value="male" name="state">Male</option>
                    <option value="female" name="state">Female</option>
                </select>
                <br>
            </div><br><br>
            <div class="col-md-4"><label>Email ID:</label></div>
            <div class="col-md-8"><input type="email" class="form-control" name="email" value="<?php echo $email;?>" required>
            </div><br><br>
            <div class="col-md-4"><label>Contact:</label></div>
            <div class="col-md-8"><input type="number" class="form-control" name="email" value="<?php echo $contact;?>" required>
            </div><br><br>
            <div class="col-md-4"><label>College/University:</label></div>
            <div class="col-md-8"><input type="text" class="form-control" name="email" value="<?php echo $college;?>" required>
            </div><br><br>
            <div class="col-md-12">
                <input type="submit" name="update" value="Update Profile" class="btn btn-block btn-primary">
            </div>
            <?php echo $pid; ?>
        </div>
    </form>
</div>