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

        #AddStudent {
            margin-top: 100px;
        }

        #RemoveStudent {}

        #ViewAllStudent {
            margin-top: -80px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 80px;
        }

        #ViewSpecificStudent {
            margin-top: 150px;
        }

        .msg2 {
            color: red;
            font-size: 30px;
        }
        .msg{
            color: green;
            font-size: 30px;
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
                </b></p>
        </div>

    </center>

    <div id="left_side">
        <form method="post">
            <table>
                <tr>
                    <td><input type="submit" name="add_student" value="Add Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="remove_student" value="Remove Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="view_all_student" value="View All Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="view_specific_student" value="View Specific Student"></td>
                </tr>
            </table>
        </form>
    </div>

    <div id="right_side">


        <!-- Add Student -->
        <div id="AddStudent">
            <?php
            if (isset($_REQUEST['add_student'])) {
                ?>
                <form method="post">
                    <table align="center">
                        <tr>
                            <td>Enter First Name :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtfname" required></td>
                        </tr>
                        <tr>
                            <td>Enter Last Name :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtlname" required></td>
                        </tr>
                        <tr>
                            <td>Enter Contact Number :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtnumber" required></td>
                        </tr>
                        <tr>
                            <td>Enter Subject :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtsubject" required></td>
                        </tr>
                        <tr>
                            <td>Enter Fees :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtfees" required></td>
                        </tr>
                        <tr>
                            <td>Enter password :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtpass" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add" value="submit"></td>
                        </tr>
                    </table>
                </form>
                <?php
            }
            ?>
            <?php
            include("connect.php");            
            if (isset($_REQUEST['add'])) {
                $q = "insert into students set
                first_name='" . $_REQUEST['txtfname'] . "',
                last_name='" . $_REQUEST['txtlname'] . "',
                contact_number='" . $_REQUEST['txtnumber'] . "',
                subject='" . $_REQUEST['txtsubject'] . "',
                fees='" . $_REQUEST['txtfees'] . "'
                ";
                mysqli_query($cn, $q);
                echo"<center class='msg'>Successfully Inserted!</center>";
            }

            ?>
        </div>

        <!-- Remove Student -->
        <div id="RemoveStudent">
            <?php
            if (isset($_REQUEST['remove_student'])) {
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
                                    <td></td>
                                    <td><input type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure want to delete?')" name="delete" value="Delete">
                                        <input type="submit" class="btn btn-primary" name="back" value="Back">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                } else {
                    echo "<center class='msg2'>Roll no doesn't exist..</center>";
                }
            }

            if (isset($_POST['delete'])) {
                $dq = "delete from students where roll_no=" . $_POST['roll_no'];
                $result = mysqli_query($cn, $dq);
            }
            if (isset($_POST['back'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_rno" value="Search">
                    </form>
                </center>
                <?php

            }
            ?>
        </div>

        <!-- View All Student -->
        <div id="ViewAllStudent">

            <?php
            if (isset($_REQUEST['view_all_student'])) {

                $q = "select * from students";
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

        <!-- View Specific Student -->
        <div id="ViewSpecificStudent">
            <?php
            if (isset($_REQUEST['view_specific_student'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_rollno2" value="Search">
                    </form>
                </center>
                <?php
            }
            if (isset($_REQUEST['search_rollno2'])) {
                $q = "select * from students where roll_no =" . $_POST['roll_no'];
                $res = mysqli_query($cn, $q);
                $c = mysqli_num_rows($res);
                if ($c > 0) {
                    while ($row = mysqli_fetch_object($res)) {
                        ?>
                        <h3 style="text-align: center;font-family:Script MT;">Student's details</h3>
                        <br>
                        <form method="post">
                            <table style="font-family:Arial;" align="center">
                                <tr>
                                    <td>Roll No:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->roll_no; ?>" name="roll_no"></td>
                                </tr>
                                <tr>
                                    <td>First Name:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->first_name; ?>" name="txtfname"></td>
                                </tr>
                                <tr>
                                    <td>Last Name:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->last_name; ?>" name="txtlname"></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->contact_number; ?>" name="txtnumber"></td>
                                </tr>
                                <tr>
                                    <td>Subject:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->subject; ?>" name="txtsubject"></td>
                                </tr>
                                <tr>
                                    <td>Fees:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->fees; ?>" name="txtfees"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-success" name="edit" value="Edit">
                                        <input type="submit" class="btn btn-primary" name="back2" value="Back">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                } else {
                    echo "<center class='msg2'>Roll no doesn't exist..";
                }
            }

            if (isset($_POST['edit'])) {
                $uq = "update students set 
                        first_name='" . $_REQUEST['txtfname'] . "',
                        last_name='" . $_REQUEST['txtlname'] . "',
                        contact_number='" . $_REQUEST['txtnumber'] . "',
                        subject='" . $_REQUEST['txtsubject'] . "',
                        fees='" . $_REQUEST['txtfees'] . "'where roll_no=" . $_POST['roll_no'];
                $res = mysqli_query($cn, $uq);
            }
            if (isset($_POST['back2'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_rno2" value="Search">
                    </form>
                </center>
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

        #AddStudent {
            margin-top: 100px;
        }

        #RemoveStudent {}

        #ViewAllStudent {
            margin-top: -80px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 80px;
        }

        #ViewSpecificStudent {
            margin-top: 150px;
        }

        .msg2 {
            color: red;
            font-size: 30px;
        }
        .msg{
            color: green;
            font-size: 30px;
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
                </b></p>
        </div>

    </center>

    <div id="left_side">
        <form method="post">
            <table>
                <tr>
                    <td><input type="submit" name="add_student" value="Add Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="remove_student" value="Remove Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="view_all_student" value="View All Student"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="view_specific_student" value="View Specific Student"></td>
                </tr>
            </table>
        </form>
    </div>

    <div id="right_side">


        <!-- Add Student -->
        <div id="AddStudent">
            <?php
            if (isset($_REQUEST['add_student'])) {
                ?>
                <form method="post">
                    <table align="center">
                        <tr>
                            <td>Enter First Name :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtfname" required></td>
                        </tr>
                        <tr>
                            <td>Enter Last Name :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtlname" required></td>
                        </tr>
                        <tr>
                            <td>Enter Contact Number :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtnumber" required></td>
                        </tr>
                        <tr>
                            <td>Enter Subject :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtsubject" required></td>
                        </tr>
                        <tr>
                            <td>Enter Fees :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtfees" required></td>
                        </tr>
                        <tr>
                            <td>Enter password :&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="txtpass" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add" value="submit"></td>
                        </tr>
                    </table>
                </form>
                <?php
            }
            ?>
            <?php
            include("connect.php");            
            if (isset($_REQUEST['add'])) {
                $q = "insert into students set
                first_name='" . $_REQUEST['txtfname'] . "',
                last_name='" . $_REQUEST['txtlname'] . "',
                contact_number='" . $_REQUEST['txtnumber'] . "',
                subject='" . $_REQUEST['txtsubject'] . "',
                fees='" . $_REQUEST['txtfees'] . "'
                ";
                mysqli_query($cn, $q);
                echo"<center class='msg'>Successfully Inserted!</center>";
            }

            ?>
        </div>

        <!-- Remove Student -->
        <div id="RemoveStudent">
            <?php
            if (isset($_REQUEST['remove_student'])) {
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
                                    <td></td>
                                    <td><input type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure want to delete?')" name="delete" value="Delete">
                                        <input type="submit" class="btn btn-primary" name="back" value="Back">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                } else {
                    echo "<center class='msg2'>Roll no doesn't exist..</center>";
                }
            }

            if (isset($_POST['delete'])) {
                $dq = "delete from students where roll_no=" . $_POST['roll_no'];
                $result = mysqli_query($cn, $dq);
            }
            if (isset($_POST['back'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_rno" value="Search">
                    </form>
                </center>
                <?php

            }
            ?>
        </div>

        <!-- View All Student -->
        <div id="ViewAllStudent">

            <?php
            if (isset($_REQUEST['view_all_student'])) {

                $q = "select * from students";
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

        <!-- View Specific Student -->
        <div id="ViewSpecificStudent">
            <?php
            if (isset($_REQUEST['view_specific_student'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_rollno2" value="Search">
                    </form>
                </center>
                <?php
            }
            if (isset($_REQUEST['search_rollno2'])) {
                $q = "select * from students where roll_no =" . $_POST['roll_no'];
                $res = mysqli_query($cn, $q);
                $c = mysqli_num_rows($res);
                if ($c > 0) {
                    while ($row = mysqli_fetch_object($res)) {
                        ?>
                        <h3 style="text-align: center;font-family:Script MT;">Student's details</h3>
                        <br>
                        <form method="post">
                            <table style="font-family:Arial;" align="center">
                                <tr>
                                    <td>Roll No:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->roll_no; ?>" name="roll_no"></td>
                                </tr>
                                <tr>
                                    <td>First Name:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->first_name; ?>" name="txtfname"></td>
                                </tr>
                                <tr>
                                    <td>Last Name:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->last_name; ?>" name="txtlname"></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->contact_number; ?>" name="txtnumber"></td>
                                </tr>
                                <tr>
                                    <td>Subject:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->subject; ?>" name="txtsubject"></td>
                                </tr>
                                <tr>
                                    <td>Fees:&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="text" value="<?php echo $row->fees; ?>" name="txtfees"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-success" name="edit" value="Edit">
                                        <input type="submit" class="btn btn-primary" name="back2" value="Back">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                    }
                } else {
                    echo "<center class='msg2'>Roll no doesn't exist..";
                }
            }

            if (isset($_POST['edit'])) {
                $uq = "update students set 
                        first_name='" . $_REQUEST['txtfname'] . "',
                        last_name='" . $_REQUEST['txtlname'] . "',
                        contact_number='" . $_REQUEST['txtnumber'] . "',
                        subject='" . $_REQUEST['txtsubject'] . "',
                        fees='" . $_REQUEST['txtfees'] . "'where roll_no=" . $_POST['roll_no'];
                $res = mysqli_query($cn, $uq);
            }
            if (isset($_POST['back2'])) {
                ?>
                <center>
                    <form action="" method="post">
                        Enter Roll No:
                        <input type="text" name="roll_no">
                        <input type="submit" name="search_rno2" value="Search">
                    </form>
                </center>
                <?php

            }

            ?>
        </div>
    </div>
</body>

>>>>>>> 0b51cef0139c9e70012c41b0990733be8c72f307
</html>