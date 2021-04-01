<?php
session_start();

$questionno=$_GET["questionno"];
$valuel=$_GET["valuel"];
$_SESSION["answer"] [$questionno] = $valuel;
?>