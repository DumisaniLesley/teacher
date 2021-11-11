<!DOCTYPE html>
<?php 
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

<div class="container" style="margin-bottom: 10px; color: black; margin-top: 100px;">
<div class="table-responsive">
    <h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 70px;">APPLICATION HISTORY</h2>
        <table class="table table-hover table-stripped">
            <thead class="thead-light">
                <tr>
                  <?php echo $email;?>
                    <th scope="col">#</th>
                    <th scope="col">Date of Application</th>
                    <th scope="col">TP Number</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "select * from applications where s_email ='$email';";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $cnt;?></td>
                            <td>
                                <?php 
                                    $date = date_create($row['date']);
                                    echo date_format($date, 'F jS, Y');
                                ?>
                            </td>
                            <td><?php echo $row['tp_number'];?> Teaching Practice</td>
                            <td><?php echo $row['status'];?></td>
                            <td><a href="applicationDetails.php?id=<?php echo $row['id'];?>">Details</a></td>
                        </tr>
                    <?php $cnt++; } ?>
                </tbody>
            </table>
            <br>
        </div>
</div>