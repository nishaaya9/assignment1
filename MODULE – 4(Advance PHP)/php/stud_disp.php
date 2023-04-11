<?php
include("scheck.php");
include("connect.php");
include("header.php");
include("menu.php");
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
    <a href="stud_ins.php">Add Record</a>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Image</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
        $q = "select * from stud_mst";
        $res = mysqli_query($cn, $q);
        while ($row = mysqli_fetch_object($res)) {
            ?>
            <tr>
                <td>
                    <?php echo $row->stud_name; ?>
                </td>
                <td>
                    <?php echo $row->stud_email; ?>
                </td>
                <td>
                    <?php echo $row->stud_address; ?>
                </td>
                <td><img src="uploadedfiles/<?php echo $row->stud_img; ?>" height="55" width="55"></td>
                <td><a href="stud_edit.php?stud_id=<?php echo $row->stud_id; ?>" class="btn btn-success">EDIT</a></td>
                <td><a href="stud_del.php?stud_id=<?php echo $row->stud_id; ?>"
                        onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">DELETE</a></td>
            </tr>

            <?php
        }
        ?>
    </table>
    

</body>

</html>