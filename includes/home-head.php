<?php
    
?>

<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../vendor/font-awesome/css/font-awesome.min">
    <link rel="stylesheet" href="../style.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="dashboard.php"><i class="fa fa-school" aria-hidden="true"></i> Teaching Practice Allocation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <style>
            body {
                overflow-x: hidden;
            }
        .bg-primary {
            /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
            background: #F0F2F0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #000C40, #F0F2F0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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

        .btn-primary {
            background-color: #3c50c1;
            border-color: #3c50c1;
        }

        .link {
            font-size: 17px;
            font-weight: bold;
        }

        .link:hover {
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
        }
        </style>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="dropdown" style="margin-right: 50px;">
                        <p class="mt-2  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" style="color: black; font-weight: bold;">
                            <?php echo $username ?>
                        </p>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="nav-link" href="../student/editProfile.php?id=<?php echo $pid; ?>" style="color: black; font-weight: bold;">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
                            <a class="nav-link" href="../student/changePassword.php" style="color: black; font-weight: bold;">
                                <i class="fa fa-key" aria-hidden="true"></i> Password</a>
                            <a class="nav-link" href="../student/summary.php" style="color: black; font-weight: bold;">
                                <i class="fa fa-book" aria-hidden="true"></i> Summary</a>
                            <a class="nav-link" href="../student/logout.php" style="color: red; font-weight: bold;">
                                <i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
                        </div>
                    </div>
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