<!DOCTYPE html>
<?php include('../includes/head.php'); ?>
<?php include('../includes/connect.php'); ?>
<h1>Application Details</h1>
<?php 
    $id = $_GET['id'];

    if(isset($_POST['approve'])){
        $query="update applications set status='Approved' where id='$id';";
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo "<div class='alert alert-success alert-dismissible text-center m-4' id='myAlert'>
            <button type='button' class='close'>&times;</button>
            <strong>Status Update Successful!</strong>
            </div>";
        }
    } elseif(isset($_POST['reject'])){
        $query="update applications set status='Rejected' where id='$id';";
        $result=mysqli_query($con,$query);
        if($result)
        {
            echo "<div class='alert alert-warning alert-dismissible text-center m-4' id='myAlert'>
            <button type='button' class='close'>&times;</button>
            <strong>Status Update Successful!</strong>
            </div>";
        }
    }
?>


<div class="container" style="margin-bottom: 10px; color: black; margin-top: 100px;">
    <h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 70px;">APPLICATION DETAILS</h2>
        <table class="table table-hover table-stripped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Student Email</th>
                    <th scope="col">Introduction Letter</th>
                    <th scope="col">Grade 12 Certificate</th>
                    <th scope="col">NRC</th>
                    <th scope="col">License</th>
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
                            <td><?php echo $row['s_email'];?></td>
                            <td><?php echo $row['letter'];?></td>
                            <td><?php echo $row['g12'];?></td>
                            <td><?php echo $row['nrc'];?></td>
                            <td><?php echo $row['license'];?></td>
                            <td><?php echo $row['tp_number'];?></td>
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
            
            <form action="" method="post" class="d-flex justify-content-center">
                <button type="submit" name="approve" class="btn btn-primary" style="margin-right: 20px;">Approve</button>
                <button type="submit" name="reject" class="btn btn-warning" style="margin-right: 20px;">Reject</button>
            
            </form>
                
        </div>

        <script>
            $(document).ready(function(){
                $(".close").click(function(){
                    $("#myAlert").alert("close");
                });
            });
        </script>