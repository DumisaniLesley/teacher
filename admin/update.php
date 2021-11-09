<!DOCTYPE html>
<?php 

include('../includes/connect.php');
$id = $_GET['id'];

?>
<?php include('../includes/head.php'); ?>
<body>
    <?php

        $query = "select * from school where id='$id';";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);
        $status = $row['status'];

        if(isset($_POST['update'])){

            $status = $_POST['status'];

            $query="update school set status='$status' where id='$id';";
            $result=mysqli_query($con,$query);
            if($result)
            {
                header("Location: schoolList.php");
            }
        }
    ?>
    <div class="container" style="margin-top: 200px; max-width: 800px;">
<h2 class="tab-title text-center mb-4">Update School Status</h2>
    <form class="form-group" method="post" action="">
        <div class="row">
            <div class="col-md-4"><label>Status:</label></div>
            <div class="col-md-8">
                <select name="status" class="form-control" id="status" required="required">
                    <option value="" ><?php echo $status ;?></option>
                    <option value="Vacant" name="status">Vacant</option>
                    <option value="Not Vacant" name="status">Not Vacant</option>
                </select>
                <br>
                <button type="submit" name="update" class="btn btn-block btn-primary">Update Status</button>
            </div><br><br>
        </div>
    </form>
    </div>
</body>
</html>