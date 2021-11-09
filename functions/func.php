<?php
session_start();

include('../includes/connect.php');
if(isset($_POST['login'])){

	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="select * from students where email='$email' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $_SESSION['pid'] = $row['pid'];
      $_SESSION['username'] = $row['fname']." ".$row['lname'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['gender'] = $row['gender'];
      $_SESSION['contact'] = $row['contact'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['college'] = $row['college'];
    }
		header("Location:../student/dashboard.php");
	}
  else {
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = '../student/login.php';</script>");
    // header("Location:error.php");
  }
		
}
if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$query="update appointmenttb set payment='$status' where contact='$contact';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:updated.php");
}



?>