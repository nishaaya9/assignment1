<!DOCTYPE html>
<html lang="en">


<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <?php include("View/header.php"); ?>
    <div class="container mt-3">

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $key) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $key->name ?>
                        </td>
                        <td>
                            <?php echo $key->email ?>
                        </td>
                        <td>
                            <?php echo $key->password ?>
                        </td>
                        <td><a href="<?php echo $GLOBALS['baseurl'];?>edit?id=<?php echo $key->uid?>" class="btn btn-success">Edit</a></td>
                        <td><a href="<?php echo $GLOBALS['baseurl']; ?>delete?id=<?php echo $key->uid ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>