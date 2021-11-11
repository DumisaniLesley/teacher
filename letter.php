<?php

    // include autoloader
    require_once 'dompdf/autoload.inc.php';
    include('includes/connect.php');

    $id = $_GET['id'];

    $query = "select * from applications where id ='$id';";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);

        $email = $row['s_email'];
        $school = $row['school'];
        $date = $row['date'];
    
    $sql = "select * from students where email ='$email';";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res);

    $name = $row['fname'];
    $lname = $row['lname'];
    $college = $row['college'];
    $contact = $row['contact'];

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    //$page = file_get_contents("letter.html");
    $page = "
        <h1 style='text-align: center;'>Introduction Letter</h1>
        <div style='text-align: end'>
            <p>$email</p>
            <p>$school</p>
            <p>$date</p>
            <p>$name</p>
            <p>$lname</p>
            <p>$college</p>
        </div>
        
    
        <br/>
        <br/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut, quia in facere animi cupiditate debitis optio pariatur eum totam possimus odit iure aliquam, fugit impedit nihil autem blanditiis excepturi? Ex tempore voluptas inventore voluptates reprehenderit praesentium, delectus doloribus qui deleniti animi mollitia in eveniet quae minus velit nihil eius tempora quam a. Expedita, nemo itaque veniam labore necessitatibus repellat blanditiis facilis vel quaerat autem a illum, impedit doloremque totam dignissimos! Unde nisi mollitia natus quo magnam non praesentium quas corrupti cupiditate voluptatibus nobis optio beatae facilis est voluptas nemo, ea reiciendis quisquam perspiciatis dolorum quos? Doloremque, aperiam labore?</p>
        <br/>
        <h3 style='text-align: center;'>yours faithifully</h3>
        <p style='text-align: center;'>Pamela</p>
    
    ";
    $dompdf->loadHtml($page);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream('result', array('Attachment'=>0));

?>