<!DOCTYPE html>
<?php 

 session_start();
 include('fileupload.php'); 
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

 
 <!-- Application for TP -->
 <div class="container">
    <div class="container-fluid" style="max-width: 900px;">
        <div class="card" style="margin-bottom: 10px; color: black; margin-top: 100px;">
            <div class="card-body" >
                <center>
                    <h2 style="margin-bottom: 10px; color: black; margin-top: 40px;">Apply For Teaching Practice</h2>
                    <p><b>NOTE: Files should be less than 1MB</b></p>
                </center><br>
                <form class="form-group" enctype="multipart/form-data" method="post" action="apply.php">
                    <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="hidden" name="email" id="email" value="<?php echo $email;?>" required/>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="hidden" name="status" id="status" value="Pending" required/>
                        </div>
                        <!-- <div class="col-md-12">
                            <input class="form-control" type="hidden" name="contact" id="contact" value="<?php echo $contact;?>" required/>
                        </div>   -->
                        <!-- <div class="col-md-12">
                            <input class="form-control" type="hidden" name="college" id="college" value="<?php echo $college;?>" required/>
                        </div>  -->
                        <div class="col-md-4">
                            <label for="spec">Introductory Letter:</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="file" name="letter" id="letter" required/>
                        </div> <br> <br>
                        <div class="col-md-4">
                            <label for="spec">Grade 12 Certificate:</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="file" name="g12" id="g12" required/>
                        </div> <br> <br>
                        <div class="col-md-4">
                            <label for="spec">NRC:</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="file" name="nrc" id="nrc" required/>
                        </div> <br> <br>
                        <div class="col-md-4">
                            <label for="spec">TCZ License:</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="file" name="license" id="license" required/>
                        </div> <br> <br>
                        <div class="col-md-4">
                            <label for="spec">TP Number:</label>
                        </div>
                        <div class="col-md-8">
                            <select name="tp_number" class="form-control" id="tp_number" required>
                                <option value="" disabled selected>TP Number</option>
                                <option value="First" name="duration">First</option>
                                <option value="Second" name="duration">Second</option>
                            </select>
                        </div>
                        <br><br>
                        <div class="col-md-4">
                            <label for="spec">School of Choice:</label>
                        </div>
                        <div class="col-md-8">
                            <select name="school" class="form-control" id="school" required>
                                <option value="" disabled selected>Select School</option>
                                <?php 
                                    $query="select * from school WHERE status='vacant'";
                                    $result=mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        $name=$row['name'];
                                        echo '<option data-value="'.$name.'" name="school">'.$name.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <br><br>
                        <div class="col-md-4">
                            <input type="submit" name="apply"
                                value="Apply For Teaching Practice" class="btn btn-primary"
                                id="inputbtn">
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </form>
            </div>
        </div>
    </div><br>
</div>