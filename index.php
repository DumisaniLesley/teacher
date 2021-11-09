<html>

<head>
    <title>Teacher Allocation System</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <style>
        body {
            overflow-x: hidden;
            overflow-y: hidden;
        }
    .form-control {
        border-radius: 0.75rem;
    }
    </style>

    <script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('cpassword').value) {
            document.getElementById('message').style.color = '#5dd05d';
            document.getElementById('message').innerHTML = 'Matched';
        } else {
            document.getElementById('message').style.color = '#f55252';
            document.getElementById('message').innerHTML = 'Password fields doesnot match';
        }
    }

    function alphaOnly(event) {
        var key = event.keyCode;
        return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    };

    function checklen() {
        var pass1 = document.getElementById("password");
        if (pass1.value.length < 6) {
            alert("Password must be at least 6 characters long. Try again!");
            return false;
        }
    }
    </script>

</head>

<!------ Include the above in your HEAD tag ---------->

<body style="background-color: white !important;">
    <nav class="navbar navbar-expand-lg navbar-lightS fixed-top" id="mainNav" style="background-color: black !important;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#"
                style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif; color: white; font-weight: bold">
                <h4><i class="fa fa-school-o" aria-hidden="true"></i>Teaching Practice Allocation System</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="student/login.php"
                            style="color: white;font-weight: bold;">
                            <h6>LOGIN</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="admin/adminLogin.php"
                            style="color: white;font-weight: bold;">
                            <h6>ADMIN LOGIN</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 180px; right: 5%">
                <h3 class="text-center" style="font-weight: 900;">ABOUT</h3>
                <p class="lead text-dark text-center" style="font-weight: 500; line-height: 40px;">
                The Teaching Practice Allocation system is a web-based system that will automate the processes that occur during the application for teaching practice by students from various colleges and university. The system will enable students to apply for teaching practice without going to the District Education Board (DEBS) offices thus saving money and time. 
                </p>
                <a href="student/signup.php" class="btn btn-primary btn-block">Get Started</a>
            </div>
            <div class="col-md-6">
                <img src="images/online.png" alt="students on computers illustration" style="width: 700px; height: 700px;">
            </div>
        </div>

    </div>
</body>

<script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
</script>

</html>