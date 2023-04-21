<?php
session_start();

if (isset($_REQUEST['addlist'])) {
    $list = $_REQUEST['list'];
    $_SESSION['list'][] = $list;
}
if (isset($_REQUEST['selectlist'])) {
    $lists = $_REQUEST['lists'];
    $_SESSION['lists'] = $lists;
}
if (isset($_REQUEST['addtask'])) {
    $task = $_REQUEST['task'];
    $_SESSION['task'][] = $task;
    $tasklist = $_REQUEST['task'];
    $_SESSION['tasklist'][] = $tasklist;
}
if (isset($_REQUEST['deletetask'])) {
    $deletetasklist = $_REQUEST['deletetasklist'];
    $_SESSION['deletetasklist'] = $deletetasklist;
}
if (isset($_REQUEST['clearall'])) {
    session_unset();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager</title>
    <style>
        #header {}

        #hr {
            border: 1px solid;
        }

        #left {
            float: left;
            width: 500px;
            box-sizing: border-box;
        }

        #right {
            float: right;
            width: 400px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <form method="post">
        <div id="header">
            <h1>Task List Manager</h1>
            <hr id="hr">
        </div>

        <div id="right">
            <!-- List Selection -->
            <h2 style="color:peru">List Selection</h2>
            <?php
            if (isset($_SESSION['list'])) {
                ?>
                <p style="margin-left:60px;margin-top:-10px">List :
                    <select name="lists[]">
                        <?php
                        foreach ($_SESSION['list'] as $key => $value) {
                            ?>
                            <option>
                                <?php echo $value ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </p>
                <p style="margin-left:98px;margin-top:-10px">
                    <input type="submit" name="selectlist" value="Select List">
                </p>
                <?php
            } else {
                ?>
                <p>There are no task lists.</p>
                <?php
            }
            ?>
            <h2 style="color:peru">Add Task List</h2>
            <p style="margin-left:60px;margin-top:-10px">List :
                <input type="text" name="list">
            </p>

            <p style="margin-left:98px;margin-top:-10px">
                <input type="submit" name="addlist" value="Add List">
            </p>
            <input type="submit" name="clearall" value="Clear All">
        </div>

        <!-- Left top Side -->
        <div id="left">
            <?php
            if (isset($_SESSION['lists'])) {
                if (!empty($_SESSION['lists'])) {
                    foreach ($_SESSION['lists'] as $selected) {
                        ?>
                        <h2 style="color:peru">
                            <?php echo '  ' . $selected; ?>
                        </h2>
                        <?php
                    }
                }

                if (isset($_SESSION['task'])) {
                    ?>
                    <ol name="tasklist">
                        <?php
                        foreach ($_SESSION['task'] as $value) {
                            ?>
                            <li>
                                <?php echo $value ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ol>
                    <?php
                } else {
                    ?>
                    <p style="margin-top:-10px">
                        There are no tasks in the selected task list.
                    </p>
                    <?php
                }
                ?>

                <!-- Add Task -->
                <h2 style="color:peru">Add Task</h2>
                <p style="margin-left:60px;margin-top:-10px">Task :
                    <input type="text" name="task">
                </p>
                <p style="margin-left:103px;margin-top:-10px">
                    <input type="submit" name="addtask" value="Add Task">
                </p>

                <?php
                if (isset($_SESSION['tasklist'])) {
                    ?>

                    <!-- Delete Task -->
                    <h2 style="color:peru">Delete Task</h2>
                    <p style="margin-left:60px;margin-top:-10px">Task :
                        <select name="deletetasklist[]">
                            <?php
                            foreach ($_SESSION['task'] as $key => $value) {
                                ?>
                                <option>
                                    <?php echo $value ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </p>
                    <p style="margin-left:103px;margin-top:-10px">
                        <input type="submit" name="deletetask" value="Delete Task">
                    </p>

                    <?php
                    if (isset($_SESSION['deletetasklist'])) {
                        //print_r($_SESSION['deletetasklist']);
                        $item = $_SESSION['deletetasklist'][0];
                        foreach ($_SESSION['task'] as $key => $value) {
                            if ($item == $value) {
                                unset($_SESSION['task'][$key]);
                            }
                        }

                    }
                }
            } else {
                ?>
                <p>Add a new list to be managed</p>
                <?php
            }
            ?>
        </div>
    </form>
</body>

</html>