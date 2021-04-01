<?php
session_start();
include "../connection.php";
include "header.php";


if(!isset($_SESSION["admin"]))
{
    ?>
<script>
window.location = "index.php";
</script>
<?php
}

$id = $_GET["id"];
$res = mysqli_query($link, "select * from exam_category where id= $id");

while($row=mysqli_fetch_array($res))
{
    $exam_category = $row ["category"];
    $exam_time = $row ["exam_time_in_minutes"];

}
?>


<!-- Bootstrap CSS-->
<link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="../css/style.css">



<!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>



    <!-- Start Edit -->
    <div class="half">
        <div class="contents order-2 order-md-1">
            <div class="bg order-1 order-md-2"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3>Edit Exam</h3>
                            </div>
                            <form action="#" name="form1" method="post">

                                <div class="form-group first">
                                    <label for="examname">Edit Exam Category</label>
                                    <input type="text" class="form-control" name="examname"
                                        value=" <?php echo $exam_category ?>">
                                </div>

                                <div class="form-group last mb-3">
                                    <label for="examtime">Edit Exam Time In
                                        Minutes</label>
                                    <input type="text" class="form-control" name="examtime"
                                        value=" <?php echo $exam_time ?>">
                                </div>
                                <div class="d-sm-flex mb-5 align-items-center">
                                    <input type="submit" class="btn btn-primary" name="submit1"
                                        value="Update Exam"></button>
                                </div>
                                <!-- End Edit -->

                                </html>
                                <?php


if(isset($_POST["submit1"]))
{
  mysqli_query($link, "update  exam_category set category = '$_POST[examname]', exam_time_in_minutes = '$_POST[examtime]' where id = $id ")or die(mysqli_error($link));
  ?>
                                <script type="text/javascript">
                                alert("Successfully Updated Exam.");
                                window.location = "exam_category.php";
                                </script>
                                <?php
}  