<?php
session_start();
include("connect.php");
$msg = "";
if (isset($_REQUEST['btnsubmit'])) {
    $p = md5($_REQUEST['txtpass']);
    $q = "select * from login_mst where 
    login_username='" . $_REQUEST['txtuname'] . "' and
    login_password='$p'
    ";
    $res = mysqli_query($cn, $q);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['uname'] = $_REQUEST['txtuname'];
        header("location:home.php");
    } else
        $msg = "<div class='alert alert-danger' align='center'>Invalid username or password</div>";

    if (isset($_REQUEST['chkrem'])) {
        setcookie("uname", $_REQUEST['txtuname'], time() + 60 * 60 * 24 * 30);
        setcookie("pass", $_REQUEST['txtpass'], time() + 60 * 60 * 24 * 30);
    }
}
if (isset($_COOKIE['uname']))
    $u = $_COOKIE['uname'];
else
    $u = "";
if (isset($_COOKIE['pass']))
    $p = $_COOKIE['pass'];
else
    $p = "";
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
    <h1 align="center">Admin Login</h1>
    <?php echo $msg; ?>
    <form method="post">
        <div class="df-main">
            <div class="df">
                <label for="username">Username</label>
                <input type="text" class="form-control" value="<?php echo $u; ?>" placeholder="Enter Username"
                    name="txtuname" required>
            </div>
            <div class="df">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="<?php echo $p; ?>" placeholder="Enter Password"
                    name="txtpass" required>
            </div>
            <div class="">
                <input type="checkbox" name="chkrem">
                <label>Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="btnsubmit">Login</button>
        </div>
    </form>
</body>

</html>