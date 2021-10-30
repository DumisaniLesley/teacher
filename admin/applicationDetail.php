<!DOCTYPE html>
<?php include('../includes/head.php'); ?>
<?php include('../includes/connect.php'); ?>
<h1>Application Details</h1>
<?php 
    $id = $_GET['id'];
    // echo $id;
?>

<div class="container" style="margin-bottom: 10px; color: black; margin-top: 100px;">
    <h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 70px;">APPLICATION DETAILS</h2>
        <table class="table table-hover table-stripped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Introduction Letter</th>
                    <th scope="col">Grade 12 Certificate</th>
                    <th scope="col">NRC</th>
                    <th scope="col">License</th>
                    <th scope="col">TP Number</th>
                    <th scope="col">School of Choice</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "select * from applications where id ='$id';";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $row['letter'];?></td>
                            <td><?php echo $row['g12'];?></td>
                            <td><?php echo $row['nrc'];?></td>
                            <td><?php echo $row['license'];?></td>
                            <td><?php echo $row['tp_number'];?></td>
                            <td><?php echo $row['school'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td>
                                <a href="applicationDetail.php?id=<?php echo $row['id'];?>">Approve</a>
                                <a href="applicationDetail.php?id=<?php echo $row['id'];?>">Reject</a>
                            </td>
                        </tr>
                    <?php $cnt++; } ?>
                </tbody>
            </table>
            <br>
        </div>