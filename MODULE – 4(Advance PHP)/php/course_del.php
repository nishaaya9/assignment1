<?php
include("connect.php");
include("header.php");
include("menu.php");
$q = "delete from course_mst where course_id=" . $_GET['course_id'];
$res = mysqli_query($cn, $q);
header("location:course_disp.php");
?>