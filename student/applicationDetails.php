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
<h1>Application Details</h1>
<?php 
    $id = $_GET['id'];

    // echo $id;

?>

<div class="container" style="margin-bottom: 10px; color: black; margin-top: 100px;">
    <div class="row">
        <div class="table-responsive">
            <h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 70px;">APPLICATION DETAILS</h2>
            <table class="table table-hover table-stripped">
                <thead class="thead-light">
                    <tr>
                    <?php echo $email;?>
                        <th scope="col">Introduction Letter</th>
                        <th scope="col">Grade 12 Certificate</th>
                        <th scope="col">NRC</th>
                        <th scope="col">TCZ License</th>
                        <th scope="col">TP Number</th>
                        <th scope="col">School of Choice</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "select * from applications where id ='$id';";
                    $result = mysqli_query($con,$query);
                
                    while ($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['letter'];?></td>
                            <td><?php echo $row['g12'];?></td>
                            <td><?php echo $row['nrc'];?></td>
                            <td><?php echo $row['license'];?></td>
                            <td><?php echo $row['tp_number'];?> Teaching Practice</td>
                            <td><?php echo $row['school'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td>
                                <?php 
                                    $date = date_create($row['date']);
                                    echo date_format($date, 'F jS, Y');
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <div>
                <?php

                    $query = "select * from applications where id ='$id';";
                    $result = mysqli_query($con,$query);
                    $row = mysqli_fetch_array($result);
                    $status = $row['status'];
                ?>
                <?php 
                
                    if($status == 'Approved'){
                        echo 
                        "<div class='d-flex justify-content-center'>
                            <button class='btn btn-primary'>Download Recommendation Letter</button>
                        </div
                        ";
                    } else {
                        echo 
                        "<div class='text-center'>
                            <div>
                                <p'>Something Did not match the required requirements</p>
                            </div>
                            <a href='apply.php' class='btn btn-primary'>Re-Apply</a>
                        </div
                        ";
                    }
                ?>
        </div>
        </div>
    </div>
</div>
