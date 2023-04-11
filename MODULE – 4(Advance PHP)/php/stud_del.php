<?php
include("connect.php");
include("header.php");
include("menu.php");
$q = "delete from stud_mst where stud_id=" . $_GET['stud_id'];
$res = mysqli_query($cn, $q);
header("location:stud_disp.php");
?>