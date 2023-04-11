<?php
include("connect.php");
include("header.php");
include("menu.php");
$q1 = "select * from slider_mst where slider_id=" . $_GET['slider_id'];
$res = mysqli_query($cn, $q1);
$row = mysqli_fetch_object($res);
if (isset($_REQUEST['btnsubmit'])) {
    if ($_FILES['slider_image']['name'] == "") {
        $q = "
        update slider_mst set
        where slider_id=" . $_GET['slider_id'];
    } else {
        $q = "
        update slider_mst set
        slider_image='" . $_FILES['slider_image']['name'] . "'
        where slider_id=" . $_GET['slider_id'];
        move_uploaded_file($_FILES['slider_image']['tmp_name'], "uploadedfiles/" . $_FILES['slider_image']['name']);
    }

    mysqli_query($cn, $q);
    header("location:slider_disp.php");
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
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Image">Image</label>
            <img src="uploadedfiles/<?php echo $row->slider_image; ?>" height="55" width="55">
            <input type="file" class="form-control" accept="image/*" placeholder="select image" name="slider_image">
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Update</button>
        <a href="slider_disp.php" class="btn btn-primary">Back</a>
    </form>

</body>

</html>