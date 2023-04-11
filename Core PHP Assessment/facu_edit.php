<<<<<<< HEAD
<?php
include("connect.php");
$q1 = "select * from students where s_no=" . $_GET['s_no'];
$res = mysqli_query($cn, $q1);
$row = mysqli_fetch_object($res);
if (isset($_REQUEST['btnsubmit'])) 
{
    $q = "
    update faculty set
    first_name='" . $_REQUEST['txtfname'] . "',
    last_name='" . $_REQUEST['txtlname'] . "',
    subject='" . $_REQUEST['txtsubject'] . "',
    marks='" . $_REQUEST['txtmarks'] . "',
    where roll_no=" . $_GET['roll_no'];
    mysqli_query($cn, $q);
    header("location:facu_disp.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$tudent Management $ystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Name">First Name</label>
            <input type="text" class="form-control" value="<?php echo $row->first_name; ?>"
                placeholder="Enter First Name" name="txtfname" required>
        </div>
        <div class="form-group">
            <label for="Name">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $row->last_name; ?>" placeholder="Enter Last Name"
                name="txtlname" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" value="<?php echo $row->subject; ?>" placeholder="Enter Subject"
                name="txtsubject" required>
        </div>
        <div class="form-group">
            <label for="marks">Marks</label>
            <input type="number" class="form-control" value="<?php echo $row->marks; ?>" placeholder="Enter Marks"
                name="txtmarks" required>
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Update</button>
        <a href="coun_disp.php" class="btn btn-primary">Back</a>
    </form>

</body>

=======
<?php
include("connect.php");
$q1 = "select * from students where s_no=" . $_GET['s_no'];
$res = mysqli_query($cn, $q1);
$row = mysqli_fetch_object($res);
if (isset($_REQUEST['btnsubmit'])) 
{
    $q = "
    update faculty set
    first_name='" . $_REQUEST['txtfname'] . "',
    last_name='" . $_REQUEST['txtlname'] . "',
    subject='" . $_REQUEST['txtsubject'] . "',
    marks='" . $_REQUEST['txtmarks'] . "',
    where roll_no=" . $_GET['roll_no'];
    mysqli_query($cn, $q);
    header("location:facu_disp.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$tudent Management $ystem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Name">First Name</label>
            <input type="text" class="form-control" value="<?php echo $row->first_name; ?>"
                placeholder="Enter First Name" name="txtfname" required>
        </div>
        <div class="form-group">
            <label for="Name">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $row->last_name; ?>" placeholder="Enter Last Name"
                name="txtlname" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" value="<?php echo $row->subject; ?>" placeholder="Enter Subject"
                name="txtsubject" required>
        </div>
        <div class="form-group">
            <label for="marks">Marks</label>
            <input type="number" class="form-control" value="<?php echo $row->marks; ?>" placeholder="Enter Marks"
                name="txtmarks" required>
        </div>
        <button type="Submit" class="btn btn-primary" name="btnsubmit">Update</button>
        <a href="coun_disp.php" class="btn btn-primary">Back</a>
    </form>

</body>

>>>>>>> 0b51cef0139c9e70012c41b0990733be8c72f307
</html>