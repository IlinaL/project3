<?php
session_start();
?>
<?php 
include "connection.php";
include "header.php";
?>

<title>Login | Quiz</title>

<body>


    <!-- Start Login Form -->
    <div class="half">
        <div class="contents order-2 order-md-1">
            <div class="bg order-1 order-md-2"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3>Login</h3>
                            </div>
                            <form action="#" name="form1" method="post">
                                <div class="form-group first">
                                    <input type="text" class="form-control" placeholder="Your Username" name="username"
                                        required>
                                </div>
                                <div class="form-group last mb-3 mt-3">
                                    <input type="password" class="form-control" placeholder="Your Password"
                                        name="password" required>
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <input type="submit" value="Log In" class="btn btn-block btn-primary" name="login">
                                </div>
                                <div class="alert alert-danger" id="failure" role="alert"
                                    style="margin-top:20px; display:none;">
                                    <strong>Does Not Match!</strong>
                                    Invalid Username Or Password !
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login -->

        <?php
if(isset($_POST["login"])){
    $count= 0;
    $res = mysqli_query($link, "select * from registration where username = '$_POST[username]' && password = '$_POST[password]' ");
    $count=mysqli_num_rows($res);

    if($count == 0) {
        ?>
        <script type="text/javascript">
        document.getElementById('failure').style.display = "block";
        </script>
        <?php
    }
    else{
        $_SESSION["username"] = $_POST["username"];



         ?>
        <script type="text/javascript">
        window.location = "select_exam.php";
        </script>
        <?php
    }
}
?>
        <?php
include "footer.php";

?>