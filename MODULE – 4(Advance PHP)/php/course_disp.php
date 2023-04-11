<?php
include("scheck.php");
include("connect.php");
include("header.php");
include("menu.php");
$q = "select * from course_mst";
$res = mysqli_query($cn, $q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <a href="course_ins.php">Add Record</a>
    <table id="table1">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Course NOY</th>
                <th>Course Description</th>
                <th>Course Fees</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>

            <?php
            while ($row = mysqli_fetch_object($res)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row->course_name; ?>
                    </td>
                    <td>
                        <?php echo $row->course_noy; ?>
                    </td>
                    <td>
                        <?php echo $row->course_desc; ?>
                    </td>
                    <td>
                        <?php echo $row->course_fees; ?>
                    </td>
                    <td><a href="course_edit.php?course_id=<?php echo $row->course_id; ?>" class="btn btn-success">EDIT</a>
                    </td>
                    <td><a href="course_del.php?course_id=<?php echo $row->course_id; ?>"
                            onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">DELETE</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>