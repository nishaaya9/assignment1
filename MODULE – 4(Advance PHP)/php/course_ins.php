<?php
include("connect.php");
if(isset($_REQUEST['btnsubmit']))
{
    $q = "
    insert into course_mst set
    course_name='" . $_REQUEST['txtname'] . "',
    course_noy='" . $_REQUEST['txtnoy'] . "',
    course_desc='" . $_REQUEST['txtdesc'] . "',
    course_fees='" . $_REQUEST['txtfees'] . "'
    ";
    mysqli_query($cn, $q);
    header("location:course_disp.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="txtname" required>
        </div>
        <div class="form-group">
            <label for="course_noy">Course NOY</label>
            <input type="text" class="form-control" placeholder="Enter No. of year" name="txtnoy" required>
        </div>
        <div class="form-group">
            <label for="course_desc">Course Description</label>
            <input type="text" class="form-control" placeholder="Enter Description" name="txtdesc" required>
        </div>
        <div class="form-group">
            <label for="course_fees">Course Fees</label>
            <input type="text" class="form-control" placeholder="Enter Fees" name="txtfees" required>
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Submit</button>
    </form>
</body>
</html>