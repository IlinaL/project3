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

$res = mysqli_query($link, "select * from exam_category where id = $id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["category"];
}


?>
<!-- Start Add Questions -->
<div class="half">
    <div class="contents order-2 order-md-1">
        <div class="bg order-1 order-md-2"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="form-block">
                        <div class="text-center mb-5">
                            <h3>Add Question <?php echo "<font color = '#0d6efd' >" .$exam_category. "</font>"; ?></h3>
                        </div>
                        <form name="form1" method="post" action="">
                            <div class="form-group first">
                                <input type="text" class="form-control" placeholder="New Question" name="question"
                                    required>
                            </div>
                            <div class="form-group first mt-3">
                                <input type="text" class="form-control" placeholder="Add Opt1" name="opt1" required>
                            </div>
                            <div class="form-group first mt-3">
                                <input type="text" class="form-control" placeholder="Add Opt2" name="opt2" required>
                            </div>
                            <div class="form-group first mt-3">
                                <input type="text" class="form-control" placeholder="Add Opt3" name="opt3" required>
                            </div>
                            <div class="form-group first mt-3">
                                <input type="text" class="form-control" placeholder="Add Opt4" name="opt4" required>
                            </div>
                            <div class="form-group last mb-3 mt-3">
                                <input type="text" class="form-control" placeholder="Answer" name="answer" required>
                            </div>
                            <div class="d-sm-flex mb-5 align-items-center">
                                <input type="submit" value="Add Question" class="btn btn-block btn-primary"
                                    name="submit1">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Add Questions -->
    <br><br>

    <?php
if(isset($_POST["submit1"]))

{
    $loop=0;
    $count=0;
    $res=mysqli_query($link, "select * from  questions where category='$exam_category' order by id asc")or die(mysqli_error($link));

    $count =mysqli_num_rows($res);

    if($count==0)
    {

    }
    else{

    while($row=mysqli_fetch_array($res))
    {
        $loop = $loop+1;
        mysqli_query($link, "update questions set question_no = '$loop' where id = $row[id]");
  

    }

    }
       $loop = $loop +1;
       mysqli_query($link, "insert into questions values(NULL, '$loop', '$_POST[question]','$_POST[opt1]','$_POST[opt2]','$_POST[opt3]','$_POST[opt4]','$_POST[answer]','$exam_category') ")or die(mysqli_error($link));


}
            ?>