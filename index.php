<?php
session_start(); 

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
    <link rel="stylesheet" href="css/main.css">


</head>

<body>
    <!--  Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand logo" href="index.php">QuizCode</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav">
                    <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="register.php" class="nav-link">Register</a></li>
                    <li class="nav-item custom-nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item custom-nav-item ml-8"><a href="admin/index.php" class="nav-link">Admin
                            Account</a></li>

                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Video background -->
    <div class="fluid remove-vid">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/1.mp4">
            </video>
            <div class="vid-overlay">
            </div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to QuizCode</h1>
            <a href="register.php" class="btn btn-primary">Get Started</a>
        </div>
    </div>
    <!-- End Video background -->

    <!-- Start Footer -->
    <footer>
        <div class="footer-container">
            <div class="container-fluid">
                <div class="footer-distributed">
                    <div class="footer-center">
                        <p class="footer-links">
                            <a href="index.php">Home</a>
                            <a href="register.php">Register</a>
                            <a href="login.php">Login</a>
                            <a href="admin/index.php">Admin Account</a>
                        </p>
                        <p class="footer">All Rights Reserved. &copy; 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Jquery and Bootstrap JavaScipt -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>

</body>

</html>