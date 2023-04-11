<?php
include("connect.php");
include("header.php");
include("menu.php");
if (isset($_REQUEST['btnsubmit'])) {
    $q = "
    insert into slider_mst set
    slider_image='" . $_FILES['slider_image']['name'] . "'
    ";
    mysqli_query($cn, $q);
    move_uploaded_file($_FILES['slider_image']['tmp_name'], "uploadedfiles/" . $_FILES['slider_image']['name']);
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
            <input type="file" class="form-control" accept="image/*" placeholder="Select Image" name="slider_image"
                required>
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Submit</button>
    </form>
</body>

</html>