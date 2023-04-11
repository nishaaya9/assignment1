<?php
include("connect.php");
include("header.php");
include("menu.php");
$q1 = "select * from stud_mst where stud_id=" . $_GET['stud_id'];
$res = mysqli_query($cn, $q1);
$row = mysqli_fetch_object($res);
if (isset($_REQUEST['btnsubmit'])) {
    if ($_FILES['stud_img']['name'] == "") {
        $q = "
        update stud_mst set
        stud_name='" . $_REQUEST['txtname'] . "',
        stud_email='" . $_REQUEST['txtemail'] . "',
        stud_address='" . $_REQUEST['txtaddress'] . "'
        where stud_id=" . $_GET['stud_id'];
    } else {
        $q = "
        update stud_mst set
        stud_name='" . $_REQUEST['txtname'] . "',
        stud_email='" . $_REQUEST['txtemail'] . "',
        stud_address='" . $_REQUEST['txtaddress'] . "',
        stud_img='" . $_FILES['stud_img']['name'] . "'
        where stud_id=" . $_GET['stud_id'];
        move_uploaded_file($_FILES['stud_img']['tmp_name'], "uploadedfiles/" . $_FILES['stud_img']['name']);
    }

    mysqli_query($cn, $q);
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
            <input type="text" class="form-control" value="<?php echo $row->stud_name; ?>" placeholder="Enter Name"
                name="txtname" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" value="<?php echo $row->stud_email; ?>" placeholder="Enter Email"
                name="txtemail" required>
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <textarea class="form-control" placeholder="Enter Address" required
                name="txtaddress"><?php echo $row->stud_address; ?></textarea>
        </div>
        <div class="form-group">
            <label for="Image">Image</label>
            <img src="uploadedfiles/<?php echo $row->stud_img; ?>" height="55" width="55">
            <input type="file" class="form-control" accept="image/*" placeholder="select image" name="stud_img">
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Update</button>
        <a href="stud_disp.php" class="btn btn-primary">Back</a>
    </form>

</body>

</html>