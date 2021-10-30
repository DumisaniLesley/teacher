<?php
session_start();
include('../includes/connect.php');

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
        header("Location:../student/dashboard.php");
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
if(isset($_POST['update']))
{
  $id = $_SESSION['id'];
	$fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $college=$_POST['college'];
	$query="update students set fname='$fname',lname='$lname',gender='$gender',email='$email',contact='$contact',college='$college' where id='$id';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:../student/dashboard.php");
}




//Add new school
if(isset($_POST['add_school']))
{
	$school_number=$_POST['school_number'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $status=$_POST['status'];

	$query="insert into school(school_number, name, email, status)values('$school_number', '$name', '$email', '$status')";
	$result=mysqli_query($con,$query);
	if($result){
    echo 'school added';
		header("Location:../admin/schoolList.php");
    
  }
}

// Update Vacany Status
if(isset($_POST['update']))
{
  echo 'pid';
	$status=$_POST['status'];
	$query="update school set status='$status' where id='$_GET[id]';";
	$result=mysqli_query($con,$query);
	if($result)
  header("Location:../admin/schoolList.php");
}

?>
