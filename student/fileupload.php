
<?php
//session_start();
include('../includes/connect.php');

$picpath="../uploads/letter/";
$docpath="../uploads/g12/";
$proofpath="../uploads/nrc/";
$licensepath="../uploads/license/";

if(isset($_POST['apply']))
{

$school = $_POST['school'];
$email = $_POST['email'];
$status = $_POST['status'];
$tp_number = $_POST['tp_number'];
$picpath=$picpath.$_FILES['letter']['name'];
$docpath1=$docpath.$_FILES['g12']['name'];     
$proofpath1=$proofpath.$_FILES['nrc']['name'];
$licensepath=$licensepath.$_FILES['license']['name'];

if(move_uploaded_file($_FILES['letter']['tmp_name'],$picpath)
  && move_uploaded_file($_FILES['g12']['tmp_name'],$docpath1)
  && move_uploaded_file($_FILES['nrc']['tmp_name'],$proofpath1)
  && move_uploaded_file($_FILES['license']['tmp_name'],$licensepath))
{

$img=$_FILES['letter']['name'];
$img1=$_FILES['g12']['name'];
$img2=$_FILES['nrc']['name'];
$license=$_FILES['license']['name'];


    $query="INSERT INTO applications (letter,g12,nrc,license, school, s_email,status, tp_number) values 
    ('$img','$img1','$img2','$license','$school','$email','$status','$tp_number')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "Inserted to DB ";  
        echo("<script>alert('Application Successful');
          window.location.href = '../student/applicationHistory.php';</script>");
    }else
    {
        echo "Error <br/>".$con->error;        
    }
}
else
{
echo "There is an error,please retry or ckeck path";
}
}
 ?>
