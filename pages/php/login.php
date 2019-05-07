<?php include('server.php') ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="../css/carousel.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <title>Hello, world!</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <a class="navbar-brand ml-3" href="../index.html">
            <img src="../images/nscc-logo.png" class="img-logo">
        </a>
        <div class="navbar-toggler">
            <div class="d-flex">
                <!--
                <a class="nav-link" href="#">Registration</a>
                <button type="button" class="btn btn-outline-light btn-login ml-3 mr-5">Login</button>
                -->
                <button class="navbar-toggler navbar-toggler-bd" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mx-3">
                    <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEmployers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Employers</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownEmployers">
                        <a class="dropdown-item" href="#">Why You Should Attend</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Previous Participants</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Essential Information</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Factsheet for Registred</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Employers</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">FAQ for Employers</a>
                    </div>
                </li>
                <li class="nav-item mx-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownStudents" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Students</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownStudents">
                        <a class="dropdown-item" href="../eventinformation.html">Event Information</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../howtoprepare.html">How to Prepare</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../faqstudent.html">FAQ for Students</a>
                    </div>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="../contact.html">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item mx-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegistration" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownRegistration">
                        <a class="dropdown-item" href="#">Employer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Student</a>
                    </div>
                </li>
                <!--
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Registration</a>
                </li>
                -->
                <li class="nav-item mx-3">
                    <a href="login.php"><button type="button" class="btn btn-outline-light btn-login">Login</button></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main">
    <div class="container" style="margin-top:250px">
        <div class="row justify-content-md-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header"><h2 style="margin:0px"><strong>Log In</strong></h2></div>
                    <div class="card-body">
                        <form method="post" role="form" action="login.php">
                            <?php include('errors.php'); ?>
                            <div class="form-group">
                                <label for="userName" class="h4">Username</label>
                                <input type="username" class="form-control form-control-lg" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="userPassword" class="h4">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label h4" for="inlineRadio1">Employer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label h4" for="inlineRadio2">Staff</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary btn-login btn-lg mt-3" name="loginUser">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER
    <footer class="container" style="margin-top:600px">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Blackbird Project &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>-->
</main>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>