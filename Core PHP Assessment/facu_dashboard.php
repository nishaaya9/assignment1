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
    <title>Faculty</title>

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

        #left_side {
            height: 86%;
            width: 10%;
            top: 21%;
            position: absolute;
        }

        #right_side {
            height: 78%;
            width: 84%;
            background-color: whitesmoke;
            left: 14%;
            top: 19%;
            border: solid 1px black;
            position: absolute;

        }

        #AddMarks {
            margin-top: 100px;
        }

        #ViewAllStudent {
            margin-top: -80px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 80px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
</head>

<body>
    <center>
        <div id="header">
            <p>$tudent Management $ystem</p>

            <a href="index.php" style="float:right">Logout</a>
        </div>
        <div><br><br><br>
            <p style="color:CornflowerBlue;font-size:25px;"><b>Welcome
                    <?php echo $_SESSION['uname']; ?>
                </b>
            </p>
        </div>

    </center>

    <div id="left_side">
        <form method="post">
            <table>
                <tr>
                    <td><input type="submit" name="add_marks" value="Add marks to Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="view_all_student" value="View all Student"></td>
                </tr>
            </table>
        </form>
    </div>

    <div id="right_side">

        <!-- Add Marks to Student -->
        <div id="AddMarks">
            <?php
            if (isset($_REQUEST['add_marks'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no" required>
                        <input type="submit" name="search_rno" value="Search">
                    </form>
                </center>
                <?php
            }
            if (isset($_REQUEST['search_rno'])) {
                $q = "select * from students where roll_no =" . $_POST['roll_no'];
                $res = mysqli_query($cn, $q);
                $c = mysqli_num_rows($res);
                if ($c > 0) {
                    while ($row = mysqli_fetch_object($res)) {
                        ?>
                        <form method="post">
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
                                    <td><input type="text" name="txtmarks"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-success" name="add" value="Add">
                                        <input type="submit" class="btn btn-primary" name="back" value="Back">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                } else {
                    echo "Roll no doesn't exist..";
                }
            }
            if (isset($_REQUEST['add'])) {
                $q = "update students set
                marks='" . $_REQUEST['txtmarks'] . "' where roll_no=" . $_POST['roll_no'];
                mysqli_query($cn, $q);
            }
            ?>
        </div>


        <!-- View All Student -->
        <div id="ViewAllStudent">

            <?php
            if (isset($_REQUEST['view_all_student'])) {

                $q = "select * from students where f_username= '" . $_SESSION['uname'] . "'";
                $res = mysqli_query($cn, $q);
                ?>
                <table id="mytable" border="1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact Number</th>
                            <th>Subject</th>
                            <th>Fees</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_object($res)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row->roll_no; ?>
                                </td>
                                <td>
                                    <?php echo $row->first_name; ?>
                                </td>
                                <td>
                                    <?php echo $row->last_name; ?>
                                </td>
                                <td>
                                    <?php echo $row->contact_number; ?>
                                </td>
                                <td>
                                    <?php echo $row->subject; ?>
                                </td>
                                <td>
                                    <?php echo $row->fees; ?>
                                </td>
                                <td>
                                    <?php echo $row->marks; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>

                </table>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.js"
                    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
                <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"> </script>
                <script>
                    $(document).ready(function () {
                        $('#mytable').DataTable();
                    });
                </script>
                <?php
            }
            ?>

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
    <title>Faculty</title>

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

        #left_side {
            height: 86%;
            width: 10%;
            top: 21%;
            position: absolute;
        }

        #right_side {
            height: 78%;
            width: 84%;
            background-color: whitesmoke;
            left: 14%;
            top: 19%;
            border: solid 1px black;
            position: absolute;

        }

        #AddMarks {
            margin-top: 100px;
        }

        #ViewAllStudent {
            margin-top: -80px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 80px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
</head>

<body>
    <center>
        <div id="header">
            <p>$tudent Management $ystem</p>

            <a href="index.php" style="float:right">Logout</a>
        </div>
        <div><br><br><br>
            <p style="color:CornflowerBlue;font-size:25px;"><b>Welcome
                    <?php echo $_SESSION['uname']; ?>
                </b>
            </p>
        </div>

    </center>

    <div id="left_side">
        <form method="post">
            <table>
                <tr>
                    <td><input type="submit" name="add_marks" value="Add marks to Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="view_all_student" value="View all Student"></td>
                </tr>
            </table>
        </form>
    </div>

    <div id="right_side">

        <!-- Add Marks to Student -->
        <div id="AddMarks">
            <?php
            if (isset($_REQUEST['add_marks'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no" required>
                        <input type="submit" name="search_rno" value="Search">
                    </form>
                </center>
                <?php
            }
            if (isset($_REQUEST['search_rno'])) {
                $q = "select * from students where roll_no =" . $_POST['roll_no'];
                $res = mysqli_query($cn, $q);
                $c = mysqli_num_rows($res);
                if ($c > 0) {
                    while ($row = mysqli_fetch_object($res)) {
                        ?>
                        <form method="post">
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
                                    <td><input type="text" name="txtmarks"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-success" name="add" value="Add">
                                        <input type="submit" class="btn btn-primary" name="back" value="Back">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                } else {
                    echo "Roll no doesn't exist..";
                }
            }
            if (isset($_REQUEST['add'])) {
                $q = "update students set
                marks='" . $_REQUEST['txtmarks'] . "' where roll_no=" . $_POST['roll_no'];
                mysqli_query($cn, $q);
            }
            ?>
        </div>


        <!-- View All Student -->
        <div id="ViewAllStudent">

            <?php
            if (isset($_REQUEST['view_all_student'])) {

                $q = "select * from students where f_username= '" . $_SESSION['uname'] . "'";
                $res = mysqli_query($cn, $q);
                ?>
                <table id="mytable" border="1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact Number</th>
                            <th>Subject</th>
                            <th>Fees</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_object($res)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row->roll_no; ?>
                                </td>
                                <td>
                                    <?php echo $row->first_name; ?>
                                </td>
                                <td>
                                    <?php echo $row->last_name; ?>
                                </td>
                                <td>
                                    <?php echo $row->contact_number; ?>
                                </td>
                                <td>
                                    <?php echo $row->subject; ?>
                                </td>
                                <td>
                                    <?php echo $row->fees; ?>
                                </td>
                                <td>
                                    <?php echo $row->marks; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>

                </table>
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.js"
                    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
                <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"> </script>
                <script>
                    $(document).ready(function () {
                        $('#mytable').DataTable();
                    });
                </script>
                <?php
            }
            ?>

        </div>

    </div>
</body>

>>>>>>> 0b51cef0139c9e70012c41b0990733be8c72f307
</html>