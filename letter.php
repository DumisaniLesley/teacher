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
    
    
        <div>
            <h1 style='margin-bottom: 50px; text-align: center; margin-top: 30px;'>Introduction Letter</h1>
            <div style='margin-left: 50px; margin-right: 50px;'>
                <p style='text-align: center;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsum temporibus et corporis in velit? Eaque, quos. Reprehenderit, sed illo! Ab itaque voluptatibus non molestiae nobis architecto, nulla illum blanditiis ea totam vitae repellendus ipsa in, $name $lname voluptatum libero, excepturi reiciendis corrupti repellat facilis ratione. Itaque, a. Atque similique consequuntur corporis, commodi odio quasi! Deleniti assumenda sequi pariatur eaque, totam quas distinctio cumque aut unde quae repellendus $college consequuntur impedit tempora? Reprehenderit rem dolor, odio molestias sunt cum unde autem aut et molestiae $school debitis inventore illum assumenda ab quasi, earum officia ducimus magni recusandae, porro architecto soluta. In quaerat culpa odio quidem!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga perferendis ad suscipit provident! Fuga accusantium dolore amet fugiat facere modi, quaerat odio voluptates nesciunt, suscipit eum, velit obcaecati quibusdam natus nulla facilis vel nemo ipsum aliquam. $date Doloremque fugiat, alias inventore excepturi repudiandae omnis ratione dicta voluptates, laboriosam distinctio provident aut?</p>
                <p style='text-align: center;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsum temporibus et corporis $email in velit? Eaque, quos. Reprehenderit, sed illo! Ab itaque voluptatibus non molestiae nobis architecto, nulla illum blanditiis ea totam vitae repellendus ipsa in, voluptatum libero, excepturi reiciendis corrupti repellat facilis ratione. Itaque, a. Atque similique consequuntur corporis, </p>
            </div>

            <p style='text-align: center;'>Your faithifully</p>
            <p style='text-align: center;'>DEBS Permanent Secretary</p>
        </div>
    
    ";
    $dompdf->loadHtml($page);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream('result', array('Attachment'=>0));

?>