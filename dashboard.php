<?php 
session_start();
include "connection.php";
include "header.php";



if(!isset($_SESSION["username"]))
{
    ?>
<script>
window.location = "login.php";
</script>
<?php
}

?>
<!-- Start Dashboard -->
<div class="half">
    <div class="bg order-1 order-md-2"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="form-block">
                    <div class="mb-5">

                        <!-- Start Timer -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-center">
                                            <div id="countdowntimer" style="display:block;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Timer -->

                        <!--  -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-center">

                                            <div id="current_que" style="float:left">0</div>
                                            <div style="float:left">/</div>
                                            <div id="total_que" style="float:left">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Start Questions -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-10 col-lg-push-1"
                                            style="min-height:300px; backgound-color:white" id="load_questions">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Questions  -->


                        <!-- Start Previous and Next Button -->
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <input type="button" class="btn btn-outline-primary" value="Previous"
                                    onclick="load_previous();">&nbsp;
                                <input type="button" class="btn btn-outline-primary" value="Next"
                                    onclick="load_next();">
                            </div>
                            <div>
                                <!-- End Previous and Next Button -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Dashboard -->

        <!-- Start Function Timer -->
        <script>
        setInterval(function() {
            timer();

        }, 1000);

        function timer() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    if (xmlhttp.reponseText == "00:00:01") {
                        window.location("result.php");
                    }
                    document.getElementById("countdowntimer").innerHTML = xmlhttp
                        .responseText;
                }
            };
            xmlhttp.open("GET", "forajax/load_timer.php", true);
            xmlhttp.send(null);
        }
        </script>
        <!--End Function Timer  -->

        <script>
        function load_total_que() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    // alert(xmlhttp.responseText);
                    document.getElementById("total_que").innerHTML = xmlhttp.responseText;
                }
            };

            xmlhttp.open("GET", "forajax/load_total_que.php ", true);
            xmlhttp.send(null);

        }

        var questionno = "1";
        load_questions(questionno);

        function load_questions(questionno) {
            document.getElementById("current_que").innerHTML = questionno;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    if (xmlhttp.responseText == "over") {
                        window.location = "result.php";
                    } else {
                        document.getElementById("load_questions").innerHTML = xmlhttp
                            .responseText;
                        load_total_que();
                    }
                }
            };

            xmlhttp.open("GET", "forajax/load_questions.php?questionno=" + questionno, true);
            xmlhttp.send(null);

        }

        function radioclick(radiovalue, questionno)

        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {}
            };

            xmlhttp.open("GET", "forajax/save_answer_in_session.php?questionno=" + questionno +
                "&valuel=" +
                radiovalue,
                true);
            xmlhttp.send(null);

        }
        // Previous
        function load_previous() {
            if (questionno == "1") {
                load_questions(questionno);
            } else {
                questionno = eval(questionno) - 1;
                load_questions(questionno);
            }

        }

        // Next
        function load_next() {
            questionno = eval(questionno) + 1;
            load_questions(questionno);

        }
        </script>