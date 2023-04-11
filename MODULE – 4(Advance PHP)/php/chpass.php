<?php
include("scheck.php");
include("connect.php");
include("header.php");
include("menu.php");
$msg = "";
if (isset($_REQUEST['btnsubmit'])) {
    $op = md5($_REQUEST['txtopass']);
    $q = "select * from login_mst where 
    login_password='" . $op . "' and
    login_username='" . $_SESSION['uname'] . "'
    ";
    $res = mysqli_query($cn, $q);
    if (mysqli_num_rows($res) > 0) {
        if ($_REQUEST['txtnpass'] == $_REQUEST['txtcpass']) {
            $p = md5($_REQUEST['txtnpass']);
            $u = "update login_mst set login_password='" . $p . "'
            where login_username = '" . $_SESSION['uname'] . "'
            ";
            mysqli_query($cn, $u);
            $msg = "<div class ='alert alert-success' align='center'>Password changed successfully...</div>";
        } else
            $msg = "<div class ='alert alert-danger' align='center'>New password and Confirm password not matched</div>";
    } else
        $msg = "<div class='alert alert-danger' align='center'>Invalid old password</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1 align="center">Change password</h1>
    <?php echo $msg; ?>

    <form method="post">
        <div class="df-main">
            <div class="df">
                <label for="txtopass">Old Password</label>
                <input type="text" class="form-control" placeholder="Enter Old Password" name="txtopass" required>
            </div>
            <div class="df">
                <label for="txtnpass">New Password</label>
                <input type="text" class="form-control" placeholder="Enter New Password" name="txtnpass" required>
            </div>
            <div class="df">
                <label for="txtcpass">Confirm Password</label>
                <input type="text" class="form-control" placeholder="Enter Confirm Password" name="txtcpass" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnsubmit">Change password</button>
        </div>
    </form>
</body>

</html>