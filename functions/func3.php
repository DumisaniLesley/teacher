<?php
session_start();
$con=mysqli_connect("localhost","root","","tpsystem");

if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from admintb where username='$username' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['username']=$username;
		header("Location:../admin/admin.php");
	}
	else
		// header("Location:error2.php");
		echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = '../admin/adminLogin.php';</script>");
}
