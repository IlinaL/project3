<?php

session_start();
include "../connection.php";
include "header.php";

?>

<title>Login | Admin</title>

<!-- Bootstrap CSS-->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>

<body>

    <!-- Start Admin Login -->
    <div class="half">
        <div class="contents order-2 order-md-1">
            <div class="bg order-1 order-md-2"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3>Admin Login</h3>
                            </div>
                            <form action="#" name="form1" method="post">

                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" placeholder="Your Username" name="username"
                                        required>
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password"
                                        name="password" required>
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <input type="submit" value="Log In" class="btn btn-block btn-primary"
                                        name="submit1">
                                </div>

                                <div class="alert alert-danger" id="failure" role="alert"
                                    style="margin-top:20px; display:none;">
                                    <strong>Invalid!</strong>
                                    Username Or Password !
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Admin Login -->



        <!-- Jquery and Bootstrap JavaScipt -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Font Awesome JS -->
        <script src="js/all.min.js"></script>





</body>

</html>


<?php
if(isset($_POST["submit1"])){
    $count=0;
    $username =mysqli_real_escape_string($link,$_POST["username"]);
    $password =mysqli_real_escape_string($link,$_POST["password"]);

    $res = mysqli_query($link, "select * from admin_login where username = '$_POST[username]' && password = '$_POST[password]' ");
    $count=mysqli_num_rows($res);

    if($count == 0) {
        ?>
<script type="text/javascript">
document.getElementById('failure').style.display = "block";
</script>
<?php
    }
    else{
        $_SESSION["admin"]=$username;

         ?>
<script type="text/javascript">
window.location = "exam_category.php";
</script>
<?php
    }
}
?>


}