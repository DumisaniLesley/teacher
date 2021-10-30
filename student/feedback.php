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
	
  if(date("Y-m-d",$appdate1)>=$cur_date){
    if((date("Y-m-d",$appdate1)==$cur_date and date("H:i:s",$apptime1)>$cur_time) or date("Y-m-d",$appdate1)>$cur_date) {
      $check_query = mysqli_query($con,"select apptime from appointmenttb where doctor='$doctor' and appdate='$appdate' and apptime='$apptime'");

        if(mysqli_num_rows($check_query)==0){
          $query=mysqli_query($con,"insert into appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values($pid,'$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

          if($query)
          {
            echo "<script>alert('Your appointment successfully booked');</script>";
          }
          else{
            echo "<script>alert('Unable to process your request. Please try again!');</script>";
          }
      }
      else{
        echo "<script>alert('We are sorry to inform that the doctor is not available in this time or date. Please choose different time or date!');</script>";
      }
    }
    else{
      echo "<script>alert('Select a time or date in the future!');</script>";
    }
  }
  else{
      echo "<script>alert('Select a time or date in the future!');</script>";
  }
  
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

<!-- Approved/Denied -->

<div class="container" style="margin-bottom: 10px; color: black; margin-top: 100px;">
<h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 70px;">APPROVED/DENIED</h2>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Report</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    $count = 1;

                    $query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid';";
                    
                    $result = mysqli_query($con,$query);
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['disease'];?></td>
                        <td>
                            <form method="get">
                                <!-- <a href="admin-panel.php?ID=" 
                    onClick=""
                    title="Pay Bill" tooltip-placement="top" tooltip="Remove"><button class="btn btn-success">Pay</button>
                    </a></td> -->

                            <a href="admin-panel.php?ID=<?php echo $row['ID']?>">
                                <input type="hidden" name="ID" value="<?php echo $row['ID']?>" />
                                <input type="submit"  class="btn btn-success" value="Download Letter" />
                            </a>
                        </td>
                        </form>
                    </tr>
                    <?php $count++; }
        ?>
                </tbody>
            </table>
            <br>
        </div>