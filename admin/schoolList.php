<?php 
    include('../includes/head.php'); 
    include('../includes/connect.php');
?>

<div class="container">
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
        <h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 70px;">SCHOOL LIST</h2>
            <thead class="thead-dark">
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