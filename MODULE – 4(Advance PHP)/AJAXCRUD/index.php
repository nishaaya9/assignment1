<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Data
        </button>
        <input type="text" id="search">
        <button type="submit" onclick="search()">search</button>
    </div>
    <!-- The Modal -->
    <div id="read-content">

    </div>
    <!-- insert modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Insert Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Name :<input type="text" id="txtname" class="form-control">
                </div>
                <div class="modal-body">
                    E-Mail :<input type="email" id="txtemail" class="form-control">
                </div>
                <div class="modal-body">
                    Address :<input type="text" id="txtadd" class="form-control">
                </div>
                <div class="modal-body">
                    City :<input type="text" id="txtcity" class="form-control">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addrecord()">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- update modal -->
    <div class="modal" id="myupdatemodal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Name :<input type="text" id="update_txtname" class="form-control">
                </div>
                <div class="modal-body">
                    E-Mail :<input type="email" id="update_txtemail" class="form-control">
                </div>
                <div class="modal-body">
                    Address :<input type="text" id="update_txtadd" class="form-control">
                </div>
                <div class="modal-body">
                    City :<input type="text" id="update_txtcity" class="form-control">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="update()">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <input type="text" id="hidden_id">
                </div>

            </div>
        </div>
    </div>
    <script>
        function addrecord() {
            var name = $("#txtname").val();
            var email = $("#txtemail").val();
            var address = $("#txtadd").val();
            var city = $("#txtcity").val();
            $.ajax(
                {
                    url: 'backend.php',
                    method: 'post',
                    data: {
                        name: name,
                        email: email,
                        address: address,
                        city: city,
                    },
                    success: function (data, status) {
                        $("#myModal").modal("hide");
                        readrecords();

                    }

                }
            );
        }
        function readrecords() {
            var readrecords = "readrecords";
            $.ajax(
                {
                    url: 'backend.php',
                    method: 'post',
                    data: {
                        readrecords: readrecords
                    },
                    success: function (data, status) {

                        $("#read-content").html(data);

                    }

                }
            );
        }
        $(document).ready(function () {
            readrecords();

        })
        function search() {
            var readrecords = "readrecords";
            var search = $("#search").val();
            $.ajax(
                {
                    url: 'backend.php',
                    method: 'post',
                    data: {
                        readrecords:readrecords,
                        search: search
                    },
                    success: function (data, status) {
                        // alert(data);
                        $("#read-content").html("");
                        $("#read-content").html(data);
                        // readrecords();
                    }

                }
            );
        }

        function getsid(sid) {
            var conf = confirm("Are you sure want to delete?");
            if (conf == true) {
                $.ajax(
                    {
                        url: 'backend.php',
                        method: 'post',
                        data: { sid: sid },
                        success: function (data, status) {
                            readrecords();
                        }

                    })

            }
        }
        function getstuddata(studid) {
            $("#hidden_id").val(studid);
            $.ajax(
                {
                    url: 'backend.php',
                    method: 'post',
                    data: { editid: studid },
                    success: function (data, status) {
                        studdata = JSON.parse(data);
                        $("#update_txtname").val(studdata.stud_name);
                        $("#update_txtemail").val(studdata.stud_email);
                        $("#update_txtadd").val(studdata.stud_address);
                        $("#update_txtcity").val(studdata.stud_city);
                    }

                })

            $("#myupdatemodal").modal("show");
        }
        function update() {
            var name = $("#update_txtname").val();
            var email = $("#update_txtemail").val();
            var address = $("#update_txtadd").val();
            var city = $("#update_txtcity").val();
            var hidden_id = $("#hidden_id").val();
            $.ajax(
                {
                    url: 'backend.php',
                    method: 'post',
                    data: {
                        update_name: name,
                        update_email: email,
                        update_address: address,
                        update_city: city,
                        update_hidden: hidden_id
                    },
                    success: function (data, status) {
                        $("#myupdatemodal").modal("hide");

                        readrecords();

                    }

                }
            );
        }
    </script>



</body>

</html>