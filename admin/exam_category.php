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

?>


</head>

<body>
    <!-- Start Add Exam Categories -->
    <div class="half">
        <div class="contents order-2 order-md-1">
            <div class="bg order-1 order-md-2"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <h3>Add Exam Categories</h3>
                            </div>
                            <form action="" name="form1" method="post">
                                <div class="form-group first">

                                    <input type="text" class="form-control" placeholder="New Exam Category"
                                        name="examname" required>
                                </div>

                                <div class="form-group last mb-3 mt-3">

                                    <input type="text" class="form-control" placeholder="Exam Time In Minutes"
                                        name="examtime" required>
                                </div>

                                <div class="d-sm-flex mb-5 align-items-center">
                                    <input type="submit" value="Add Exam" class="btn btn-block btn-primary"
                                        name="submit1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Exam Categories -->


    <!--  Start Edit & Delete Exam -->

    <div class="half">
        <div class="contents order-2 order-md-1">
            <div class="bg order-1 order-md-2"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <div class="form-block">
                            <div class="text-center mb-5">
                                <table class="table table-bordered">
                                    <h1>Exam Categories</h1>
                                    <thead style = "color:#0d6efd;">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col">Exam Name</th>
                                            <th scope="col">Exam Time</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
    $count = 0;
    $res = mysqli_query($link, "select * from exam_category");
    while($row=mysqli_fetch_array($res))
    {
      $count = $count + 1;
      ?>
                                        <tr>
                                            <th scope="row"><?php echo $count;  ?></th>
                                            <td><?php echo $row["category"]; ?></td>
                                            <td><?php echo $row["exam_time_in_minutes"]; ?></td>
                                            <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                            <td> <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

                                        </tr>
                                        <?php
    }
    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Edit & Delete Exam -->

</body>

</html>

<?php


if(isset($_POST["submit1"]))
{
  mysqli_query($link, "insert into exam_category values(NULL,'$_POST[examname]','$_POST[examtime]')")or die(mysqli_error($link));
  ?>
<script type="text/javascript">
alert("The exam has been successfully added.");
window.location.href = window.location.href;
</script>
<?php
} 

