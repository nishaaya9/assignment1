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
    <a href="slider_ins.php">Add Record</a>
    <table class="table table-striped">
        <tr>
            <th>Slider ID</th>
            <th>Slider Image</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
        $q = "select * from slider_mst";
        $res = mysqli_query($cn, $q);
        while ($row = mysqli_fetch_object($res)) {
            ?>
            <tr>
                <td>
                    <?php echo $row->slider_id; ?>
                </td>
                <td><img src="uploadedfiles/<?php echo $row->slider_image; ?>" height="55" width="55"></td>
                <td><a href="slider_edit.php?slider_id=<?php echo $row->slider_id; ?>" class="btn btn-success">EDIT</a></td>
                <td><a href="slider_del.php?slider_id=<?php echo $row->slider_id; ?>"
                        onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">DELETE</a></td>
            </tr>

            <?php
        }
        ?>
    </table>


</body>

</html>