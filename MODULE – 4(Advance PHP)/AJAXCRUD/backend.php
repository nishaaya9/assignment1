<?php
$con = mysqli_connect("localhost", "root", "", "new");
extract($_POST);

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['city'])) {
    $q = "insert into stud_mst values(NULL,'$name','$email','$address','$city')";
    mysqli_query($con, $q);
}
if (isset($_POST['readrecords'])) {
    $dq = "select * from stud_mst";
    if (isset($_POST['search'])) {
        $s = $_POST['search'];
        $dq = "select * from stud_mst where 
        stud_name like '%$s%' or
        stud_email like '%$s%' or
        stud_address like '%$s%' or
        stud_city like '%$s%' 
        ";
    }
    $res = mysqli_query($con, $dq);
    $data = '<table border=2 class="table table-bordered table-hover"  >
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>';
    while ($row = mysqli_fetch_object($res)) {
        $data .= '<tr>
       <td>' . $row->stud_id . '</td>
       <td>' . $row->stud_name . '</td>
       <td>' . $row->stud_email . '</td>
       <td>' . $row->stud_address . '</td>
       <td>' . $row->stud_city . '</td>
       <td><button class="btn btn-success" onclick="getstuddata(' . $row->stud_id . ')">EDIT</button></td>
       <td><button class="btn btn-danger" onclick="getsid(' . $row->stud_id . ')">DELETE</button></td>
       </tr>';
    }
    $data .= '</table>';
    echo $data;
}
if (isset($_POST['sid'])) {
    $sid = $_POST['sid'];
    $q = "delete from stud_mst where stud_id=$sid";
    mysqli_query($con, $q);
}
if (isset($_POST['editid'])) {
    $editid = $_POST['editid'];
    $q = "select * from stud_mst where stud_id=$editid";
    $res = mysqli_query($con, $q);
    $row = mysqli_fetch_object($res);
    echo json_encode($row);
}
if (isset($_POST['update_name']) && isset($_POST['update_email']) && isset($_POST['update_address']) && isset($_POST['update_city']) && isset($_POST['update_hidden'])) {
    $q = "update stud_mst set stud_name='$update_name',stud_email='$update_email',stud_address='$update_address',stud_city='$update_city' where stud_id=$update_hidden";
    echo json_encode($q);
    mysqli_query($con, $q);
}
?>