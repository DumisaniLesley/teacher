<?php 
    include('../includes/head.php'); 
    include('../includes/connect.php');
?>
  
  <!-- Students List -->
  <div class="container" style="margin-bottom: 100px;">
        <div class="mb-4">
            <h2 class="text-center">Student List</h2>
        </div>
            <table class="table table-hover">
            <h2 class="text-center" style="margin-bottom: 40px; color: black; margin-top: 70px;">STUDENT LIST</h2>
                <thead class="thead-dark">
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