<<<<<<< HEAD
<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counsellor</title>

    <style>
        #header {
            height: 6%;
            width: 100%;
            top: 2%;
            font-size: 25px;
            background-color: black;
            color: white;
            position: absolute;
        }

        #right_side {
            height: 78%;
            width: 76%;
            background-color: whitesmoke;
            left: 12%;
            right: 12%;
            top: 19%;
            border: solid 1px black;
            position: absolute;

        }

        #search {
            margin-top: 80px;
        }
    </style>

</head>

<body>
    <center>
        <div id="header">
            <p>$tudent Management $ystem</p>
            <a href="index.php" style="float:right">Logout</a>
        </div>
        <div><br><br><br>
            <p style="color:CornflowerBlue;font-size:25px;"><b>Welcome
                    <?php echo $_SESSION['first_name']; ?>
                </b>
            </p>
        </div>

    </center>
    <div id="right_side"><br><br><br>
        <?php
        $q = "select * from students where first_name='" . $_SESSION['first_name'] . "'";
        $res = mysqli_query($cn, $q);
        while ($row = mysqli_fetch_object($res)) {
            ?>

            <table align="center">
                <tr>
                    <td>Roll No:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" name="roll_no" value="<?php echo $row->roll_no; ?>"></td>
                </tr>
                <tr>
                    <td>First Name:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->first_name; ?>"></td>
                </tr>
                <tr>
                    <td>Last Name:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->last_name; ?>"></td>
                </tr>
                <tr>
                    <td>Contact Number:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->contact_number; ?>"></td>
                </tr>
                <tr>
                    <td>Subject:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->subject; ?>"></td>
                </tr>
                <tr>
                    <td>Fees:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->fees; ?>"></td>
                </tr>
                <tr>
                    <td>Marks:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->marks; ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" name="edit" value="Edit"></td>
                </tr>
            </table>
            <?php
        }
        ?>


    </div>

    </div>

    </div>
</body>

=======
<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counsellor</title>

    <style>
        #header {
            height: 6%;
            width: 100%;
            top: 2%;
            font-size: 25px;
            background-color: black;
            color: white;
            position: absolute;
        }

        #right_side {
            height: 78%;
            width: 76%;
            background-color: whitesmoke;
            left: 12%;
            right: 12%;
            top: 19%;
            border: solid 1px black;
            position: absolute;

        }

        #search {
            margin-top: 80px;
        }
    </style>

</head>

<body>
    <center>
        <div id="header">
            <p>$tudent Management $ystem</p>
            <a href="index.php" style="float:right">Logout</a>
        </div>
        <div><br><br><br>
            <p style="color:CornflowerBlue;font-size:25px;"><b>Welcome
                    <?php echo $_SESSION['first_name']; ?>
                </b>
            </p>
        </div>

    </center>
    <div id="right_side"><br><br><br>
        <?php
        $q = "select * from students where first_name='" . $_SESSION['first_name'] . "'";
        $res = mysqli_query($cn, $q);
        while ($row = mysqli_fetch_object($res)) {
            ?>

            <table align="center">
                <tr>
                    <td>Roll No:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" name="roll_no" value="<?php echo $row->roll_no; ?>"></td>
                </tr>
                <tr>
                    <td>First Name:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->first_name; ?>"></td>
                </tr>
                <tr>
                    <td>Last Name:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->last_name; ?>"></td>
                </tr>
                <tr>
                    <td>Contact Number:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->contact_number; ?>"></td>
                </tr>
                <tr>
                    <td>Subject:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->subject; ?>"></td>
                </tr>
                <tr>
                    <td>Fees:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->fees; ?>"></td>
                </tr>
                <tr>
                    <td>Marks:&nbsp;&nbsp;&nbsp;</td>
                    <td><input type="text" value="<?php echo $row->marks; ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" name="edit" value="Edit"></td>
                </tr>
            </table>
            <?php
        }
        ?>


    </div>

    </div>

    </div>
</body>

>>>>>>> 0b51cef0139c9e70012c41b0990733be8c72f307
</html>