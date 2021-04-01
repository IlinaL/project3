<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>QuizCode</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <!--  Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#6c757d;">

        <div class="container-fluid">
            <a href="index.php" class="navbar-brand" href="index.php"><span style="color:#fff">QuizCode</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav">
                    <li class="nav-item custom-form"><a href="select_exam.php" class="nav-link">Select Exam</a></li>
                    <li class="nav-item custom-form"><a href="old_exam_results.php" class="nav-link">Results</a>
                    </li>
                    <li class="nav-item custom-form"><a href="register.php" class="nav-link">Register</a></li>
                    <li class="nav-item custom-form"><a href="login.php" class="nav-link">Login</a></li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

                        </ul>
                    </div>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- End Navigation -->


    <!-- Jquery and Bootstrap JavaScipt -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>

</body>

</html>