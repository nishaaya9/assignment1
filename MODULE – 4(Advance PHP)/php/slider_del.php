<?php
include("connect.php");
include("header.php");
include("menu.php");
$q = "delete from slider_mst where slider_id=" . $_GET['slider_id'];
$res = mysqli_query($cn, $q);
header("location:slider_disp.php");
?>