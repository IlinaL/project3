 <?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
 <script>
window.location = "login.php";
 </script>
 <?php
}
?>
 <?php 
include "connection.php";
include "header.php";

?>

 <?php
    $res = mysqli_query($link, "select * from exam_category");
    while($row=mysqli_fetch_array($res))
    {
?>

<!-- Start Select-Exam -->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-center">
                <input type="button" class="btn btn-outline-primary" style = "margin-top:20px;" value="<?php echo $row["category"]; ?>"
     onclick="set_exam_type_session(this.value); ">
                    <!-- <div id="countdowntimer" style="display:block;"></div> -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>

 <?php
        }
        ?>

        <!-- End Select Exam -->
 

 <script>
function set_exam_type_session(exam_category) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // alert(xmlhttp.responseText);
            window.location = "dashboard.php";
        }
    };

    xmlhttp.open("GET", "forajax/set_exam_type_session.php?exam_category=" + exam_category, true);
    xmlhttp.send(null);
}
 </script>


