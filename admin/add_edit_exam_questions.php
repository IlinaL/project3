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



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Select Exam Question</h1>

    </div>

    <table class="table table-bordered">
        <h1>Exam Categories</h1>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Exam Name</th>
                <th scope="col">Exam Time</th>
                <th scope="col">Select</th>

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
                <td><a class = "btn btn-outline-primary" href="add_edit_questions.php?id=<?php echo $row["id"]; ?>">Select</a></td>

            </tr>
            <?php
    }
    ?>

        </tbody>
    </table>