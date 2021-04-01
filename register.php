<?php
session_start(); 

include "connection.php";
include "header.php";


?>

<title>Register | Quiz</title>

</head>

<body>


    <!-- Start Register Form -->

    <div class="half">
        <div class="contents order-2 order-md-1">
            <div class="bg order-1 order-md-2"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3>Register</h3>
                            </div>
                            <form action="#" name="form1" method="post">
                                <div class="form-group first">
                                    <input type="text" class="form-control" placeholder="First Name" name="firstname"
                                        required>
                                </div>
                                <div class="form-group first mt-3">
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastname"
                                        required>
                                </div>
                                <div class="form-group first mt-3">
                                    <input type="text" class="form-control" placeholder="Username" name="username"
                                        required>
                                </div>
                                <div class="form-group first mt-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group last mb-3 mt-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <input type="submit" value="Register" class="btn btn-block btn-primary"
                                        name="submit1">
                                </div>

                                <div class="alert alert-success" id="success" role="alert"
                                    style="margin-top:10px; display:none;">
                                    <strong>Success!</strong>
                                    Account Registration successfully.
                                </div>
                                <div class="alert alert-danger" id="failure" role="alert"
                                    style="margin-top:10px; display:none;">
                                    <strong>Already Exist!</strong>
                                    This Username is Already Exist
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End  Register Form  -->




        <?php
if(isset($_POST["submit1"])){
    $count = 0;
    $res = mysqli_query($link, "select * from registration where username = '$_POST[username]' ") or die(mysqli_error($link));
    $count=mysqli_num_rows($res);

    if($count > 0) {
        ?>
        <script type="text/javascript">
        document.getElementById('success').style.display = "none";
        document.getElementById('failure').style.display = "block";
        </script>
        <?php
    }
    else{
         mysqli_query($link, "insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[email]','$_POST[password]')") or die(mysqli_error($link));

         ?>
        <script type="text/javascript">
        document.getElementById('success').style.display = "block";
        document.getElementById('failure').style.display = "none";
        </script>
        <?php
    }
}
?>

        <?php
include "footer.php";

?>