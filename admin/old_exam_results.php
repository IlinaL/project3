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
<div class="half">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-2">

                    <h1 style="padding:30px;">Old Exams Results</h1>
                    <?php
$count = 0;
$res = mysqli_query($link, "select * from exam_results order by id desc");
$count = mysqli_num_rows($res);

if($count==0)
{
    ?>
                    <h1>No Results Found </h1>

                    <?php
}
else{

    echo "<table class ='table table-bordered'>";
    echo "<tr style = 'color:#0d6efd;'>";
    echo "<th>"; echo "username"; echo "</th>";
    echo "<th>"; echo "exam_type"; echo "</th>";
    echo "<th>"; echo "total_question"; echo "</th>";
    echo "<th>"; echo "correct_answer"; echo "</th>";
    echo "<th>"; echo "wrong_answer"; echo "</th>";
    echo "<th>"; echo "exam_time"; echo "</th>";
    echo "</tr>";

    while($row =mysqli_fetch_array($res))
    {
    echo "<tr>";
    echo "<td>"; echo $row["username"]; echo "</td>";
    echo "<td>"; echo $row["exam_type"]; echo "</td>";
    echo "<td>"; echo $row ["total_question"]; echo "</td>";
    echo "<td>"; echo $row["correct_answer"]; echo "</td>";
    echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
    echo "<td>"; echo $row["exam_time"]; echo "</td>";
    echo "</tr>";
    }

    echo "</table>";
}
?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>