<?php include('../includes/head.php'); ?>

<body style="padding-top:50px;">
    <div class="container-fluid" style="margin-top:50px;">
        <h3 class="mb-4" style="margin-left: 40%; font-weight: bold; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME
            ADMINISTRATOR </h3>
            <div class="container-fluid container-fullw bg-white">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-home fa-stack-1x fa-inverse"></i> </span>
                                            <h4 class="StepTitle" style="margin-top: 5%;">Schools List</h4>
                                            <p class="links cl-effect-1">
                                                <a href="schoolList.php">
                                                    View Schools
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" >
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                                            <h4 class="StepTitle" style="margin-top: 5%;">Student List</h4>

                                            <p class="cl-effect-1">
                                                <a href="studentList.php">
                                                    View Students
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                                            <h4 class="StepTitle" style="margin-top: 5%;">Application List</h4>

                                            <p class="cl-effect-1">
                                                <a href="applications.php">
                                                    View Applications
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" >
                                    <div class="panel panel-white no-radius text-center">
                                        <div class="panel-body">
                                            <span class="fa-stack fa-4x"> <i
                                                    class="fa fa-square fa-stack-2x text-primary"></i> <i
                                                    class="fa fa-gear fa-stack-1x fa-inverse"></i> </span>
                                            <h4 class="StepTitle" style="margin-top: 5%;">Manage Schools</h4>
                                            <p class="cl-effect-1">
                                                <a href="addSchool.php">Add
                                                    School</a>
                                                &nbsp|
                                                <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                                                    Edit School
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <div class="row">
            <div class="">
                <div class="tab-content" id="nav-tabContent" style="width: 980px;">
                    <!-- School List -->
                    <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="col-md-8">
                            <form class="form-group" action="doctorsearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="doctor_contact"
                                            placeholder="Enter Email ID" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="doctor_search_submit"
                                            class="btn btn-primary" value="Search"></div>
                                </div>
                            </form>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">School Number</th>
                                    <th scope="col">School Name</th>
                                    <th scope="col">School Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from school";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $id = $row['id'];
                      $school_number = $row['school_number'];
                      $name = $row['name'];
                      $email = $row['email'];
                      $status = $row['status'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$school_number</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$status</td>
                        <td>					
                            <a href='update.php?id=$id' class='btn btn-primary'>Update</a>
                        </td>
                      </tr>";
                   $cnt++; }

                  ?>
                            </tbody>
                        </table>
                        <br>
                    </div>

                    <!-- Students List -->
                    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">
                        <div class="col-md-8">
                            <form class="form-group" action="patientsearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="patient_contact"
                                            placeholder="Enter Contact" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="patient_search_submit"
                                            class="btn btn-primary" value="Search"></div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">College/University</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from students";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row['pid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      $college = $row['college'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$fname $lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                        <td>$college</td>
                      </tr>";
                  $cnt++;  }

                  ?>
                            </tbody>
                        </table>
                        <br>
                    </div>


                    <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

                        <div class="col-md-12">

                            <div class="row">



                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Doctor</th>
                                            <th scope="col">Fullname</th>
                                            <th scope="col">Application Date</th>
                                            <th scope="col">Application Time</th>
                                            <th scope="col">Disease</th>
                                            <th scope="col">Allergy</th>
                                            <th scope="col">Prescription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $query = "select * from prestb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $doctor = $row['doctor'];
                      $pid = $row['pid'];
                      $ID = $row['ID'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $appdate = $row['appdate'];
                      $apptime = $row['apptime'];
                      $disease = $row['disease'];
                      $allergy = $row['allergy'];
                      $pres = $row['prescription'];

                      
                      echo "<tr>
                      <td>$cnt</td>
                        <td>$doctor</td>
                        <td>$fname $lname</td>
                        <td>$appdate</td>
                        <td>$apptime</td>
                        <td>$disease</td>
                        <td>$allergy</td>
                        <td>$pres</td>
                      </tr>";
                   $cnt++; }

                  ?>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>


                    <!-- Application Details -->

                    <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">
                        <div class="col-md-8">
                            <form class="form-group" action="appsearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="app_contact"
                                            placeholder="Search Student" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="app_search_submit"
                                            class="btn btn-primary" value="Search"></div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">College/Uni</th>
                                    <th scope="col">Selected School</th>
                                    <th scope="col">Attachments</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo '$'.$row['docFees'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td>
                            <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      echo "Cancelled by Student";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by Doctor";
                    }
                        ?></td>
                        <td>
                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                        { ?>

													
	                        <a href="doctor-panel.php?ID=<?php echo $row['ID']?>&cancel=update" 
                              onClick="return confirm('Are you sure you want to cancel this Application ?')"
                              title="Cancel Application" tooltip-placement="top" tooltip="Remove"><button class="btn btn-danger">Cancel</button></a>
	                        <?php } else {

                                echo "Cancelled";
                                } ?>
                        
                        </td>
                                </tr>
                                <?php $cnt++; } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>

                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        ...</div>
                    <!-- Add School -->
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <h2 class="tab-title text-center mb-4">Add School</h2>
                        <form class="form-group" method="post" action="func2.php">
                            <div class="row">
                                <div class="col-md-4"><label>School number:</label></div>
                                <div class="col-md-8"><input type="number" class="form-control" name="school_number" required></div><br><br>
                                <div class="col-md-4"><label>School Name:</label></div>
                                <div class="col-md-8"><input type="text" class="form-control" name="name"
                                        required></div><br><br>
                                <div class="col-md-4"><label>School Email ID:</label></div>
                                <div class="col-md-8"><input type="email" class="form-control" name="email" required>
                                </div><br><br>
                                <div class="col-md-4"><label>Status:</label></div>
                                <div class="col-md-8">
                                    <select name="status" class="form-control" id="status" required="required">
                                        <option value="" name="state" disabled selected>Select Vacancy
                                        </option>
                                        <option value="vacant" name="state">Vacant</option>
                                        <option value="not vacant" name="state">Not Vacant</option>
                                    </select>
                                    <br>
                                    <input type="submit" name="add_school" value="Add School" class="btn btn-block btn-primary">
                                </div><br><br>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="list-settings1" role="tabpanel"
                        aria-labelledby="list-settings1-list">
                        <form class="form-group" method="post" action="admin-panel1.php">
                            <div class="row">

                                <div class="col-md-4"><label>Email ID:</label></div>
                                <div class="col-md-8"><input type="email" class="form-control" name="demail" required>
                                </div><br><br>

                            </div>
                            <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-primary"
                                onclick="confirm('do you really want to delete?')">
                        </form>
                    </div>


                    <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...
                    </div>

                    <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

                        <div class="col-md-8">
                            <form class="form-group" action="messearch.php" method="post">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" name="mes_contact"
                                            placeholder="Enter Contact" class="form-control"></div>
                                    <div class="col-md-2"><input type="submit" name="mes_search_submit"
                                            class="btn btn-primary" value="Search"></div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;

                    $query = "select * from contact;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
              
                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
                  ?>
                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['contact'];?></td>
                                    <td><?php echo $row['message'];?></td>
                                </tr>
                                <?php $cnt++; } ?>
                            </tbody>
                        </table>
                        <br>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
</body>

</html>