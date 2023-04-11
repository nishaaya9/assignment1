<?php
include("connect.php");
include("header.php");
include("menu.php");
if (isset($_REQUEST['btnsubmit'])) {
    $q = "
    insert into stud_mst set
    stud_name='" . $_REQUEST['txtname'] . "',
    stud_email='" . $_REQUEST['txtemail'] . "',
    stud_address='" . $_REQUEST['txtaddress'] . "',
    stud_img='" . $_FILES['stud_img']['name'] . "'
    ";
    mysqli_query($cn, $q);
    move_uploaded_file($_FILES['stud_img']['tmp_name'], "uploadedfiles/" . $_FILES['stud_img']['name']);
    header("location:stud_disp.php");
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
            <label for="Name">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="txtname" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" placeholder="Enter Email" name="txtemail" required>
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <textarea class="form-control" placeholder="Enter Address" name="txtaddress" required></textarea>
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" class="form-control" accept="image/*" placeholder="Select Image" name="stud_img"
                required>
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Submit</button>
    </form>
</body>

</html>