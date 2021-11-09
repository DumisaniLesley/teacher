<!DOCTYPE html>
<?php 

include("connect.php");
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" integrity="sha512-EaaldggZt4DPKMYBa143vxXQqLq5LE29DG/0OoVenoyxDrAScYrcYcHIuxYO9YNTIQMgD8c8gIUU8FQw7WpXSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <a class="navbar-brand" href="admin.php">Teaching Practice Allocation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <style>
        .bg-primary {
            background: #F0F2F0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #000C40, #F0F2F0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .col-md-4 {
            max-width: 20% !important;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background: #F0F2F0;
            background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);
            background: linear-gradient(to right, #000C40, #F0F2F0);
            border-color: #c3c3c3;
        }

        .text-primary {
            color: #342ac1 !important;
        }

        #cpass {
            display: -webkit-box;
        }

        #list-app {
            font-size: 15px;
        }

        .btn-primary {
            background-color: #3c50c1;
            border-color: #3c50c1;
        }
        </style>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color: red; font-weight: bold;"><i class="fa fa-power-off"></i> Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: black; font-weight: bold;">Profile</a>
                </li>
            </ul>
        </div>
    </nav>
</head>
<style type="text/css">
button:hover {
    cursor: pointer;
}

#inputbtn:hover {
    cursor: pointer;
}
</style>