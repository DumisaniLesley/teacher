<?php include('../includes/head.php'); ?>
<?php include('../includes/connect.php'); ?>
        <!-- Application Details -->

        <div class="container">
            <table class="table table-hover">
            <h2 class="text-center " style="margin-bottom: 40px; color: black; margin-top: 100px;">STUDENTS APPLICATION LIST</h2>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Email</th>
                        <th scope="col">School of Choice</th>
                        <th scope="col">T.P Number</th>
                        <th scope="col">Date of Application</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
        <?php 

            $query = "SELECT * FROM applications ORDER BY date DESC;";
            $result = mysqli_query($con,$query);
            $cnt=1;
            while ($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $cnt;?></td>
            <td><?php echo $row['s_email'];?></td>
            <td><?php echo $row['school'];?></td>
            <td><?php echo $row['tp_number'];?></td>
            <td>
                <?php 
                    $date = date_create($row['date']);
                    echo date_format($date, 'F jS, Y');
                ?>
            </td>
            <td>
                <a href="applicationDetail.php?id=<?php echo $row['id'];?>">View Details</a>
            </td>
        </tr>
            <?php $cnt++; } ?>
        </tbody>
    </table>
    <br>
</div>