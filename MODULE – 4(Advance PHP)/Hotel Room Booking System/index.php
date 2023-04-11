<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        #header {
            height: 4.5%;
            width: 100%;
            top: 2%;
            font-size: 25px;
            background-color: grey;
            color: white;
            position: absolute;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        #right_side {
            height: 81%;
            width: 90%;
            background-color: whitesmoke;
            left: 5%;
            top: 16%;
            border: solid 1px black;
            position: absolute;
        }

        .booking {
            font-size: 25px;
        }

        .df-main {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sub {
            display: flex;
            flex-direction: column;
            margin-left: 10px;
        }

        .main {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;

        }
    </style>
    <script>
        $(document).ready(function () {
            $(".fulldaydiv").hide();
            $(".halfdaydiv").hide();
            $(".customdiv").hide();

        });
        function booking(val) {
            if (val == "fullday") {
                $(".fulldaydiv").show();
                $(".halfdaydiv").hide();
                $(".customdiv").hide();
            }
            if (val == "halfday") {
                $(".halfdaydiv").show();
                $(".fulldaydiv").hide();
                $(".customdiv").hide();
            }
            if (val == "custom") {
                $(".customdiv").show();
                $(".halfdaydiv").hide();
                $(".fulldiv").hide();
            }
        }


    </script>
</head>

<body>
    <center>
        <div id="header">
            <marquee>Hotel Room Booking $ystem</marquee>
        </div>
        <br><br><br>

        <div class="booking">
            <form>
                <label for="book">Booking :</label>
                <select name="rooms" id="rooms" onchange="booking(this.value)">
                    <option value=""></option>
                    <option value="fullday">Full day</option>
                    <option value="halfday">Half day</option>
                    <option value="custom">Custom</option>
                </select>
            </form>
        </div>
    </center>
    <div id="right_side">

        <!-- Full Day -->
        <div class="fulldaydiv">
            <br><br><br>
            <form method="post">
                <div class="df-main">
                    <div class="main">
                        <div class="sub">
                            <label for="check-in">Check-in</label>
                            <input type="date" class="form-control" name="checkin" required>
                        </div>
                        <div class="sub">
                            <label for="check-out">Check-out</label>
                            <input type="date" class="form-control" name="checkout" required>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="btnsubmit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Half Day -->
        <div class="halfdaydiv">
            <br><br><br>
            <form method="post">
                <div class="df-main">
                    <div class="main">
                        <div class="sub">
                            <label for="check-in">Check-in</label>
                            <input type="date" class="form-control" name="checkin" required>
                        </div>
                        <div class="sub">
                            <label for="check-out">Check-out</label>
                            <input type="date" class="form-control" name="checkout" required>
                        </div>
                        <div class="sub">
                            <label for="book">Slot :</label>
                            <select name="rooms" id="rooms" onchange="booking(this.value)">
                                <option value=""></option>
                                <option value="">Morning (8AM to 6PM)</option>
                                <option value="">evening (7PM to Morning 7AM)</option>
                            </select>

                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="btnsubmit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Custom -->
        <div class="customdiv">
            <br><br><br>
            <form method="post">
                <div class="df-main">
                    <div class="main">
                        <div class="sub">
                            <label for="check-in">Check-in</label>
                            <input type="date" class="form-control" name="checkin" required>
                        </div>
                        <div class="sub">
                            <label for="check-out">Check-out</label>
                            <input type="date" class="form-control" name="checkout" required>
                        </div>
                         <div class="sub">
                            <label for="check-out">Time</label>
                            <input type="time" class="form-control" name="time" required>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="btnsubmit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>